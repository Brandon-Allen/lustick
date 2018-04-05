<?php get_header();
  $resource_type_class = 'resource-' . strtolower(str_replace(' ', '-', get_field('resource_type')));
?>

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


  <!-- Resource Content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="lkm-slab resource-content-container<?php if (get_field('resource_type')) echo ' ' . $resource_type_class; ?>">
    <div class="content-container lkm-row">
      <div class="lkm-column one-fourth">
        <?php get_template_part( '_includes/sidemenu-education'); ?>
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
