<?php
/**
 * Generic fallback template (required by WordPress).
 * The real pages are front-page.php and page-finishes.php.
 */
get_header();
?>

  <section class="fin-hero">
    <div class="container">
      <h1><?php is_home() ? bloginfo( 'name' ) : the_title(); ?></h1>
    </div>
  </section>

  <section class="fin-swatches">
    <div class="container">
      <?php
      while ( have_posts() ) {
        the_post();
        the_content();
      }
      ?>
    </div>
  </section>

<?php get_footer(); ?>
