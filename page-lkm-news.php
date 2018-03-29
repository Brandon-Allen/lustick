<?php get_header();
/* Template Name: LKM News */
?>

<section id="content" role="main">
  <?php if( get_field('single_hero_image') ): ?>
  <header class="lkm-slab news" style="background-image: url('<?php the_field('single_hero_image'); ?>');">
  <?php endif; ?>
    <div class="content-container lkm-row">
      <div class="lkm-column whole">
        <h2 class="page-headline"><?php the_field('single_hero_text'); ?></h2>
        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      </div>
    </div>
  </header>


<div class="lkm-slab news-landing">
  <div class="content-container lkm-row">
    <div class="lkm-column one-fourth">
      <h4>This is the Sidebar</h4>
    </div>

        <div class="lkm-column three-fourths">
          <div class="intro-container">
            <h2>In the News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui</p>
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
