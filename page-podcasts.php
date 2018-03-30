<?php get_header();
/* Template Name: Podcasts */
?>

<section id="content" role="main">
  <header class="header additional-resource-header" style="background-image:url('<?php the_field('podcast_hero_bkgnd') ?>')">
    <div class="lkm-slab" >
      <div class="content-container lkm-row">
        <div class="lkm-column whole">
          <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </div>
      </div>
    </div>
  </header>

  <div class="lkm-slab podcast-content">
    <div class="content-container lkm-row">
      <div class="lkm-column one-fourth add-resource-menu-sidebar">
        Sidebar Menu
      </div>

      <div class="lkm-column three-fourths add-resource-content">
        <div class="podcast-intro">
          <h2><?php the_field('page_title'); ?></h2>
          <h5>by <?php the_field('author'); ?></h5>
          <?php the_field('intro_body_copy'); ?>
        </div>

        <?php if(have_rows('podcasts')): ?>
          <?php while(have_rows('podcasts')): the_row();
            $title = get_sub_field('podcast_title');
            $episode = get_sub_field('episode_info');
            $transcript = get_sub_field('transcript');
            $link = get_sub_field('podcast_link');
          ?>
          <div class="podcast-container">
            <div class="podcast-info-container">
              <h3><?php echo $title; ?></h3>
              <p><?php echo $episode; ?></p>
              <span class='transcript-button'><i class="far fa-file-plus"></i></span>
              <div class="transcript-container">
                <?php echo $transcript; ?>
              </div>
            </div>
            <div class="podcast-controller-container">
              <audio src="<?php echo $link['url']; ?>" controls subtitles></audio>
            </div>
          </div>
        <?php endwhile; ?>
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


</section>
<?php get_footer(); ?>
