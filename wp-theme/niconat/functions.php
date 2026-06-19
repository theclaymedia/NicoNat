<?php
/**
 * NicoNat theme functions.
 *
 * The theme is a 1:1 port of the approved HTML mockup. Content is hardcoded
 * in the templates (front-page.php, page-finishes.php) by design — see
 * wp-theme/README.md for the install checklist and form setup.
 */

define( 'NN_VERSION', '1.0.0' );

// ── Contact Form 7 ──────────────────────────────────────────────────────────
// After installing CF7 and creating the two forms (exact form bodies are in
// README.md → "Forms"), paste their shortcodes here. Until then the theme
// renders styled, non-sending mockup forms identical to the original design.
define( 'NN_CF7_CONTACT', '[contact-form-7 id="bb9acd7" title="Contact"]' );
define( 'NN_CF7_SAMPLES', '[contact-form-7 id="bf2ebdd" title="Sample Request"]' );

/**
 * URL for a file shipped inside the theme, e.g. nn_asset( 'assets/images/x.jpg' ).
 */
function nn_asset( $path ) {
	return esc_url( get_template_directory_uri() . '/' . ltrim( $path, '/' ) );
}

/**
 * Permalink of the Finishes page (slug "finishes"), with a sane fallback.
 */
function nn_finishes_url() {
	$page = get_page_by_path( 'finishes' );
	return $page ? get_permalink( $page ) : home_url( '/finishes/' );
}

/**
 * Permalink of the Work archive. Returns the 'work' (or 'projects') page/CPT
 * archive when it exists; falls back to the homepage portfolio section until
 * the Projects custom post type is built (see README).
 */
function nn_work_url() {
	$page = get_page_by_path( 'work' );
	if ( ! $page ) { $page = get_page_by_path( 'projects' ); }
	return $page ? get_permalink( $page ) : home_url( '/#portfolio' );
}

function nn_is_finishes() {
	return is_page( 'finishes' ) || is_page_template( 'page-finishes.php' );
}

// Contact Form 7 inserts <p>/<br> at every newline in form templates ("autop"),
// which mangles our hand-built form markup (chips widget, buttons). Our form
// bodies are complete HTML, so disable it.
add_filter( 'wpcf7_autop_or_not', '__return_false' );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'style', 'script', 'search-form', 'gallery', 'caption' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	// Tenor Sans comes from Google Fonts; The Seasons is self-hosted via
	// @font-face inside main.css / finishes.css (assets/fonts/).
	wp_enqueue_style( 'nn-google-fonts', 'https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap', array(), null );

	if ( is_front_page() ) {
		// Transparent-over-hero header chrome + all homepage sections.
		wp_enqueue_style( 'nn-main', nn_asset( 'assets/css/main.css' ), array( 'nn-google-fonts' ), NN_VERSION );
		wp_enqueue_script( 'nn-main', nn_asset( 'assets/js/main.js' ), array(), NN_VERSION, true );
	} else {
		// Solid header chrome; also styles the finishes catalog + sample form.
		wp_enqueue_style( 'nn-finishes', nn_asset( 'assets/css/finishes.css' ), array( 'nn-google-fonts' ), NN_VERSION );
		if ( nn_is_finishes() ) {
			wp_enqueue_script( 'nn-finishes', nn_asset( 'assets/js/finishes.js' ), array(), NN_VERSION, true );
		}
	}

	wp_enqueue_style( 'nn-wp-extras', nn_asset( 'assets/css/wp-extras.css' ), array(), NN_VERSION );
} );
