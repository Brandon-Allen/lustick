<?php get_header(); ?>
<section id="content" role="main">
  <article id="post-0" class="post not-found">
    <header class="header support-page-header">
      <div class="content-container lkm-row support-page">
        <div class="lkm-column whole">
          <h1 class="entry-title">404 - <?php _e( 'Not Found', 'blankslate' ); ?></h1>
        </div>
      </div>
    </header>

    <!-- <div class="lkm-slab support-page-search-container">
      <div class="content-container lkm-row">
        <div class="lkm-column whole">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div> -->

    <div class="lkm-slab">
      <div class="content-container lkm-row">
        <div class="lkm-column whole support-page-content">
          <section class="entry-content">
            <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
          </section>
        </div>
      </div>
    </div>
  </article>
</section>
<?php get_footer(); ?>
