<?php get_header(); ?>

<section id="content" role="main">
  <header class="header support-page-header">
    <div class="content-container lkm-row support-page">
      <div class="lkm-column whole">
        <h2 class="entry-title"><?php
        if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
        elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
        elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
        else { _e( 'Archives', 'blankslate' ); }
        ?></h2>
      </div>
    </div>
  </header>

  <div class="lkm-slab">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths support-page-content-2-col">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>

      </div>

      <div class="lkm-column one-fourth support-page-content">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
