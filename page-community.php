<?php get_header();
 /* Template Name: Community */
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

<div class="lkm-slab community">
  <div class="content-container lkm-row">
    <div class="lkm-column one-fourth">
      <?php wp_nav_menu( array( 'theme_location' => 'additional-resources-menu' ) ); ?>
    </div>
    <div class="lkm-column three-fourths">
      <h2><?php the_field('community_headline') ?></h2>
      <p><?php the_field('community_intro_text') ?></p>

      <?php if(have_rows('sponsorship_repeater')): ?>
      <div class="sponsorship-tile-container">
        <?php while(have_rows('sponsorship_repeater')): the_row();
            $logo = get_sub_field('sponsorship_logo');
        ?>
        <div class="sponsor-tile lkm-column one-third-grid">
          <div class="color-block"></div>
          <img src="<?php echo $logo[url]; ?>" alt="<?php echo $logo[alt] ?>">
        </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
    </div>
  </div>
</div>

<div class="lkm-slab sub-fb-form">
  <div class="content-container lkm-row">
    <div class="lkm-column one-fourth">
      <div class="fb-footer-container">
        <div class="fb-icon-container">
          <i class="fab fa-facebook"></i>
        </div>
        <h5>FOLLOW US ON</h5>
        <h3>FACEBOOK</h3>
        <a href="https://www.facebook.com/LustickKaimanMadrone" target="_blank">FOLLOW</a>
      </div>
    </div>


    <div class="lkm-column three-fourths form-container sub-footer-form">
      <h3>Free Consultation</h3>
      <p><strong>READY TO TALK ABOUT YOUR CASE?</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      <?php
        gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
      ?>
      <div class="bg-color-slab"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
