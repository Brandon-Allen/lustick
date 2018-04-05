<?php get_header(); ?>

<section id="content" role="main">

  <div class="lkm-slab resource-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths nav-text-content">
        <?php
          $postType = get_post_type_object(get_post_type());
          if ($postType) {
            ?>
           <h4><?php echo esc_html($postType->labels->name); ?></h4>
        <?php  } ?>
        <?php
          $term = get_field('resource_category');
        ?>
        <h1 class="entry-title"><?php echo get_cat_name($term); ?></h1>
      </div>
      <div class="lkm-column one-fourth nav-container">
        <!-- <?php wp_nav_menu( array( 'theme_location' => 'resource-menu' ) ); ?> -->
      </div>
    </div>
  </div>

  <!-- Tabs -->
  <?php
    global $post;
    $resource_category = get_field('resource_category');

    $edPost = lkm_latest_resource($resource_category, 'Charge FAQs');
    $pastPost = lkm_latest_resource($resource_category, 'Past Case');
  ?>

  <?php if (isset($edPost) && isset($pastPost)): ?>
  <div class="lkm-slab tabs">
    <div class="content-container lkm-row">
      <a href="<?php echo get_permalink( $edPost ); ?>" class="lkm-column one-half lkm-tab<?php if(get_field('resource_type') != 'Past Case') echo ' lkm-active-tab'; ?>" title="Education">Education</a>
      <a href="<?php echo get_permalink( $pastPost ); ?>" class="lkm-column one-half lkm-tab<?php if(get_field('resource_type') == 'Past Case') echo ' lkm-active-tab'; ?>" title="Past Cases">Past Cases</a>
    </div>
  </div>
<?php endif; ?>
  <!-- End Tabs -->

  <!-- Resource Content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="lkm-slab resource-content-container">
    <div class="content-container lkm-row">
      <div class="lkm-column one-fourth">
        <?php if(get_field('resource_type') == 'Past Case') {
          get_template_part( '_includes/sidemenu-past-cases');
        } else {
          get_template_part( '_includes/sidemenu-education');
        }
        ?>

      </div>
      <div class="lkm-column three-fourths resource-post">
      <h2 class='article-title'><?php the_title(); ?></h2>
      <?php get_template_part( 'entry', ( 'content' ) ); ?>

      <?php if(get_field('resource_type') == 'Past Case') { ?>
        <div class="disclaimer">
          <h6>Disclaimer</h6>
          <p>Our goal at Lustick, Kaiman & Madrone is to make a positive difference in our clients’ lives through compassionate, effective, and hassle-free legal representation. We are proud of our results, many of which are listed below. Past performance is no guarantee of future results. However, we do constantly strive to achieve the very best outcome for every client.</p>
        </div>
      <?php } else {

      } ?>
      </div>
      </div>
      </div>
      <?php endwhile; endif; ?>

      <!-- End Resource Content -->

<footer class="footer">
<!-- <?php get_template_part( 'nav', 'below-single' ); ?> -->
</footer>
</section>
<?php get_footer(); ?>
