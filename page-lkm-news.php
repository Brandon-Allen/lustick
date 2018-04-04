<?php get_header();
/* Template Name: LKM News */
?>

<section id="content" role="main">
  <?php if( get_field('single_hero_image') ): ?>
  <header class="lkm-slab news additional-resource-header" style="background-image: url('<?php the_field('single_hero_image'); ?>');">
  <?php endif; ?>
    <div class="content-container lkm-row">
      <div class="lkm-column whole">
        <div class="additional-resource-header-content">
          <h2 class="page-headline"><?php the_field('single_hero_text'); ?></h2>
          <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </div>
      </div>
    </div>
  </header>


<div class="lkm-slab news-landing">
  <div class="content-container lkm-row">
    <div class="lkm-column one-fourth">
      <?php wp_nav_menu( array( 'theme_location' => 'additional-resources-menu' ) ); ?>
    </div>

        <div class="lkm-column three-fourths">
          <div class="intro-container">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('intro_copy') ?></p>
          </div>
          <?php
          global $post;
          $args = array(
            'posts_per_page' => -1,
            'category_name' => 'in-the-news'
          );

          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<div class="lkm-slab">
              <a href="<?php the_permalink(); ?>">
                <div class="content-container lkm-row article-container">
                  <div class="lkm-column one-third news-feature-img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="lkm-column two-thirds news-content-container">
                  		<h3><?php the_title(); ?></h3>
                      <h5><?php the_time('F jS, Y'); ?></h5>
                      <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </a>
            </div>

          <?php endforeach;
          wp_reset_postdata();?>

        </div>
    </div><!-- LKM ROW -->
</div><!-- LKM SLAB END -->



</section>

<?php get_footer(); ?>
