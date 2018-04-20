<?php get_header(); ?>

<section id="content" role="main">
  <header class="header support-page-header">
    <div class="content-container lkm-row support-page">
      <div class="lkm-column whole">
        <h2 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h2>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
      </div>
    </div>
  </header>

  <div class="lkm-slab">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths support-page-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>

        <div class="footer-post">
          <?php get_template_part( 'nav', 'below' ); ?>
        </div>
      </div>

      <div class="lkm-column one-fourth support-page-content">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  </section>

<?php get_footer(); ?>
