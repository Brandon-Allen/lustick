<?php get_header();
  $resource_type_class = 'resource-' . strtolower(str_replace(' ', '-', get_field('resource_type')));
?>

<section id="content" role="main">

  <div class="lkm-slab resource-single-header">
    <div class="content-container lkm-row">
      <div class="lkm-column whole">
        <?php
          $postType = get_post_type_object(get_post_type());
          if ($postType) {
            ?>
           <h2><?php echo esc_html($postType->labels->name); ?></h2>
        <?php  } ?>
        <?php
          $term = get_field('resource_category');
        ?>
        <h1 class="entry-title"><?php echo get_cat_name($term); ?></h1>
      </div>
    </div>
  </div>


  <!-- Resource Content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="lkm-slab resource-content-container<?php if (get_field('resource_type')) echo ' ' . $resource_type_class; ?>">
    <div class="content-container lkm-row">
      <div class="lkm-column one-fourth">
        <div class="desktop-resource-nav">
          <?php get_template_part( '_includes/sidemenu-education'); ?>
        </div>
        <div class="mobile-resource-nav">
          <div class="mobile-sidebar-trigger"><h4>Select a Resource</h4></div>
          <div class="nav-case">
            <?php get_template_part( '_includes/sidemenu-education'); ?>
          </div>
        </div>
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
