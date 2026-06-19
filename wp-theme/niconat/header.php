<?php
/**
 * Shared header. Markup is identical on every page — the visual difference
 * (transparent over the hero vs. solid on inner pages) comes from which
 * stylesheet is enqueued, exactly like the mockup's two HTML files.
 *
 * Section links scroll on the front page (#hero) and navigate home first
 * from inner pages (https://site/#hero).
 */
function nn_anchor( $hash ) {
	return is_front_page() ? '#' . $hash : esc_url( home_url( '/' ) . '#' . $hash );
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/png" href="<?php echo nn_asset( 'assets/images/niconat-favicon.png' ); ?>">
  <link rel="apple-touch-icon" href="<?php echo nn_asset( 'assets/images/niconat-favicon.png' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo nn_asset( 'assets/images/niconat-logo-new.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
      <nav class="nav" id="nav">
        <a href="<?php echo nn_anchor( 'hero' ); ?>" class="nav-link">Home</a>
        <a href="<?php echo esc_url( nn_work_url() ); ?>" class="nav-link">Work</a>
        <a href="<?php echo esc_url( nn_finishes_url() ); ?>" class="nav-link<?php echo nn_is_finishes() ? ' is-current' : ''; ?>">Finishes</a>
        <a href="<?php echo nn_anchor( 'services' ); ?>" class="nav-link">Services</a>
        <a href="<?php echo nn_anchor( 'about' ); ?>" class="nav-link">About</a>
        <a href="<?php echo nn_anchor( 'contact' ); ?>" class="nav-link">Contact</a>
        <a href="<?php echo nn_anchor( 'contact' ); ?>" class="nav-cta">Start a Project</a>
      </nav>
      <button class="mobile-toggle" id="mobileToggle" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </header>
