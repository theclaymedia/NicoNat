<?php
/**
 * Generic inner page — uses the finishes-page chrome (dark hero band).
 */
get_header();
?>

  <section class="fin-hero">
    <div class="container">
      <div class="fin-breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>
        <span class="current"><?php the_title(); ?></span>
      </div>
      <h1><?php the_title(); ?></h1>
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
