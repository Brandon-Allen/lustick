<?php
/**
 * Template Name: Front-Page
 *
 * @package WordPress
 * @subpackage Lustick Kaiman & Madrone
 */

get_header(); ?>

<section id="content" role="main">
  <?php if( have_rows('hero_slider') ): ?>
  <div class="hero cycle-slideshow"
    data-cycle-random="true"
    data-cycle-speed="2000"
    data-cycle-timeout="7000"
    data-cycle-pager="#cycle-pager2"
    data-cycle-pager-template="<span><div></div></span>"
    data-cycle-slides="> div.hero-container"
  >
    <div id="cycle-pager2"></div>
    <?php while( have_rows('hero_slider') ): the_row();
      //get_class_vars
      $image = get_sub_field('background_image');
      $headline = get_sub_field('headline_copy');
      $subHead = get_sub_field('sub_headline_copy');
      $button = get_sub_field('button_link');
      $direction = get_sub_field('text_direction');
    ?>
    <div class="hero-container <?php echo $direction ?>" style="background-image:url('<?php echo $image['url']; ?>');">
      <div class="hero-header">
        <h1><?php echo $headline; ?></h1>
        <h3><?php echo $subHead; ?></h3>
        <?php if('$button'): ?>
          <div class="button-container">
            <a data-fancybox href="<?php echo $button ?>" class="cta">
              <span class='icons'>
                <i class="fas fa-circle"></i>
                <i class="fas fa-play"></i>
              </span>
              <span class="text">Watch Video</span>
            </a>
          </div>
        <?php endif; ?>
        <!-- <p class="entry-title"><?php the_title(); ?></p> <?php edit_post_link(); ?> -->
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
  </div>

<!-- ===================== TEAM OF ATTORNEYS ==================== -->

  <div class="lkm-slab team">
    <div class="bgcolor-slab"></div>
    <div class="content-container lkm-row">
      <div class="lkm-column one-half team-content">
        <h2><?php the_field('team_title'); ?></h2>
        <p><?php the_field('team_summary'); ?></p>
        <a href="/team/">VIEW THE TEAM +</a>
      </div>
      <div class="lkm-column one-half profile cycle-slideshow"
        data-cycle-random="true"
        data-cycle-timeout="0"
        data-cycle-pager="#cycle-pager"
        data-cycle-pager-template="<span><div></div></span>"
        data-cycle-slides="> div.profile-tiles"
      >
      <div id="cycle-pager"></div>
        <?php if( have_rows('attorney_tiles') ): ?>
        <?php while( have_rows('attorney_tiles') ): the_row();
          $imageA = get_sub_field('attorney_image');
          $name = get_sub_field('attorney_name');
          $title = get_sub_field('attorney_title');
          $bio = get_sub_field('attorney_bio');
          $link = get_sub_field('attorney_page_link');
        ?>
        <div class="profile-tiles">
          <div class="profile-content">
            <h2><?php echo $name ?></h2>
            <h5><?php echo $title ?></h5>
            <p><?php echo $bio ?></p>
            <a href="<?php echo $link ?>">READ MORE +</a>
          </div>

          <div class="profile-photo">
            <img src='<?php echo $imageA['url'] ?>' alt="<?php echo $imageA['alt'] ?>" />
          </div>
        </div><!-- Profile Tile End -->
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
    </div>
  </div><!-- Team End -->

<!-- ===================== LAW PRACTICE ==================== -->
<?php if(have_rows('practice_carousel')): ?>
  <div class="lkm-slab practice">
    <div class="lkm-row">
      <h2>Areas of Practice</h2>
      <div class="owl-carousel">
        <?php while(have_rows('practice_carousel')): the_row();
          $icon = get_sub_field('practice_icon');
          $title = get_sub_field('practice_title');
          $linkP = get_sub_field('practice_page');
        ?>
          <div class="item">
            <div class="owl-container">
              <div class="icon-container"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div>
              <h3><a class="practice-link" href="<?php echo $linkP; ?>"><?php echo $title; ?></a></h3>
              <a href="<?php echo $linkP; ?>">LEARN MORE</a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div><!-- Practice End -->
<?php endif; ?>

<!-- ===================== QUOTE ==================== -->
  <div class="lkm-slab quote">
    <div class="lkm-row">
      <div class="quote-container">
        <span></span>
          <i class="fas fa-quote-left"></i>
      </div>
      <div class="quote-content cycle-slideshow"
        data-cycle-timeout="10000"
        data-cycle-slides="> div.whole"
        data-cycle-auto-height = 'calc'
      >
      <?php if( have_rows('quote_repeater')): ?>
        <?php while( have_rows('quote_repeater')): the_row();
            $quote = get_sub_field('quote');
            $name = get_sub_field('quote_name');
            $support = get_sub_field('supporting_info');
        ?>
      <div class="whole">
        <quote><?php echo $quote; ?></quote>
        <h5><?php echo $name; ?></h5>
        <p><?php echo $support; ?></p>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div><!-- Quote Container End -->
    </div>
  </div><!-- Quote End -->

<!-- ===================== FORM ==================== -->

  <div class="lkm-slab consultation-form">
      <div class="content-container lkm-row">
        <div class="lkm-column one-half consultation-content">
          <h2>Free Consultation</h2>
          <p><span>NAVIGATING A BAD SITUATION? WE CAN HELP FIND A SOLUTION.</span> Use the form provided or call us directly to discuss your case. Our team is dedicated to protecting your future.</p>
          <p class='number'>Want to talk instead?<phone>360 685 4221</phone></p>
        </div>

        <div class="lkm-column one-half form-container">
          <?php
            gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
          ?>
        </div>
      </div>
  </div>

<!-- ===================== LOGOS ==================== -->

  <div class="lkm-slab logos">
      <div class="content-container lkm-row logo-content-container">
        <?php if( have_rows('logo_repeater')): ?>
          <?php while( have_rows('logo_repeater')): the_row();
            $logo = get_sub_field('logo_image');
            $logoLink = get_sub_field('logo_links');
          ?>
        <div class="one-fourth logo-container">
          <a href="<?php echo $logoLink ?>" target="_blank"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
  </div>

</section>
<script src="<?php bloginfo('template_directory'); ?>/_js/jquery.cycle2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_js/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_js/owl.carousel.min.js"></script>
<script type="text/javascript">
  var $ = jQuery;
  $('.owl-carousel').owlCarousel({
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    loop: true,
    autoplay:true,
    autoplayTimeout:3000,
    smartSpeed: 700,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:3
        },
        1470:{
            items:4
        },
        1850:{
            items:5
        }
    }
  });

  $("[data-fancybox]").fancybox({
		// Options will go here
	});

</script>

<?php get_footer(); ?>
