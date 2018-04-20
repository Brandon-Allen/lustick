<?php get_header(); ?>
  <section id="content" role="main">
    <?php if ( have_posts() ) : ?>
      <header class="header support-page-header">
        <div class="content-container lkm-row support-page">
          <div class="lkm-column whole">
            <h2 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h2>
            </div>
          </div>
        </div>
      </header>


    <div class="lkm-slab">
      <div class="content-container lkm-row">
        <div class="lkm-column whole support-page-content">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry' ); ?>
        <?php endwhile; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
      </div>
    </div>
  </div>

  <?php else : ?>

  <header class="header support-page-header">
    <div class="content-container lkm-row support-page">
      <div class="lkm-column whole">
        <h2 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h2>
        </div>
      </div>
    </div>
  </header>

<div class="lkm-slab">
  <div class="content-container lkm-row">
    <div class="lkm-column whole support-page-content">
      <article id="post-0" class="post no-results not-found">

        <header class="header">
          <h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
        </header>

        <section class="entry-content">
          <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
        </section>
      </article>
    </div>
  </div>
</div>


    <?php endif; ?>
  </section>
<?php get_footer(); ?>
