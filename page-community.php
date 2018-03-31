<?php get_header();
 /* Template Name: Community */
?>

<section id="content" role="main">
  <?php if( get_field('single_hero_image') ): ?>
  <header class="lkm-slab news additional-resource-header" style="background-image: url('<?php the_field('single_hero_image'); ?>');">
  <?php endif; ?>
  <div class="content-container lkm-row">
    <div class="lkm-column whole">
      <h2 class="page-headline"><?php the_field('single_hero_text'); ?></h2>
      <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
    </div>
  </div>
</header>

<div class="lkm-slab community">
  <div class="content-container lkm-row">
    <div class="lkm-column one-fourth">
      <?php wp_nav_menu( array( 'theme_location' => 'additional-resources-menu' ) ); ?>
    </div>
    <div class="lkm-column three-fourths">
    </div>
  </div>
</div>

<?php get_footer(); ?>
