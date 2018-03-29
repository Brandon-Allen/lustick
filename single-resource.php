<?php get_header(); ?>

<section id="content" role="main">

  <div class="lkm-slab resource-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths nav-text-content">
        <?php
          $postType = get_post_type_object(get_post_type());
          if ($postType) {
            ?>
           <h4><?php echo esc_html($postType->labels->singular_name); ?></h4>
        <?php  } ?>
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="lkm-column one-fourth nav-container">
        <?php wp_nav_menu( array( 'theme_location' => 'resource-menu' ) ); ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab">
    test
    <?php
    echo 'test ' . count(get_the_category());
      $cats = get_the_category();
      for($i=0; $i<count($cats); $i++) {
          echo 'category: ' . $cats[$i];
      }
    ?>

  </div>

<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_footer(); ?>
