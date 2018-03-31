<?php get_header(); ?>
<section id="content" role="main">
  <div class="lkm-slab resource-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column whole nav-text-content">
        <h2>In the News</h2>
      </div>
    </div>
  </div>

  <div class="lkm-slab">
    <div class="content-container lkm-row single-post-container">
      <div class="lkm-column one-fourth">
        This is the sidebar menu
      </div>
      <div class="lkm-column three-fourths">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
        <footer class="footer">
          <?php get_template_part( 'nav', 'below-single' ); ?>
        </footer>
      </div>
    </div>
  </div>

</section>
<?php get_footer(); ?>
