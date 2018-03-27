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
  <div class="hero">
    <?php while( have_rows('hero_slider') ): the_row();
      //get_class_vars
      $image = get_sub_field('background_image');
      $headline = get_sub_field('headline_copy');
      $subHead = get_sub_field('sub_headline_copy');
      $button = get_sub_field('link_button')
    ?>

    <div class="hero-container" style="background-image:url('<?php echo $image['url']; ?>');">
      <div class="hero-header">
        <h1><?php echo $headline; ?></h2>
        <h3><?php echo $subHead; ?></h3>
        <?php if('$button'): ?>
          <div class="button-container">
            <a href="#" class="cta">
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
        <h2>A Team That Understands.</h2>
        <p><span>YOUR PROBLEMS ARE OUR PROBLEMS.</span> We bring our team of solutions to your problems. The legal experts Lustick, Kaiman, & Madrone bring over 40 years of experiences from both sides of the systems. As former prosecutors, we build your defense with the distinct strategic advantage, anticipating arguments at every step.We are a Bellingham based Criminal Defense, DUI, Traffic, Gun Rights, Military & Aviation Law Attorneys practicing in Whatcom, Skagit, and San Juan counties, as well as the Federal and Military court systems.</p>
        <a href="">READ MORE +</a>
      </div>
      <div class="lkm-column one-half profile cycle-slideshow"
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
            <img src='<?php echo $imageA['url'] ?>' alt="<?php echo $image['alt'] ?>" />
          </div>
        </div><!-- Profile Tile End -->
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
    </div>
  </div><!-- Team End -->

<!-- ===================== LAW PRACTICE ==================== -->
  <div class="lkm-slab practice">
    <div class="lkm-row">
      <h2>Areas of Practice</h2>
      <div class="owl-carousel">
          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-aviation-law.png" alt="Aviation Law Icon" /></div>
            <h3>AVIATION LAW</h3>
            <a href="">LEARN MORE</a>
          </div></div>

          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-criminal-defense.png" alt="Criminal Defense Icon" /></div>
            <h3>CRIMINAL DEFENSE</h3>
            <a href="">LEARN MORE</a>
          </div></div>

          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-dui-dwi.png" alt="DUI/DWI Icon" /></div>
            <h3>DUI - DWI</h3>
            <a href="">LEARN MORE</a>
          </div></div>

          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-gun-rights-records.png" alt="Gun Rights and Records Icon" /></div>
            <h3>GUN RIGHTS & RECORDS</h3>
            <a href="">LEARN MORE</a>
          </div></div>

          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-military-law.png" alt="Military Law Icon" /></div>
            <h3>MILITARY LAW</h3>
            <a href="">LEARN MORE</a>
          </div></div>

          <div class="item"><div class="owl-container">
            <div class="icon-container"><img src="<?php bloginfo('template_directory')?>/_images/icon-traffic-injury.png" alt="Traffic and Injury Law Icon" /></div>
            <h3>Traffic & Injury</h3>
            <a href="">LEARN MORE</a>
          </div></div>

      </div>
    </div>
  </div><!-- Practice End -->

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
      <div class="content-container lkm-row">
        <?php if( have_rows('logo_repeater')): ?>
          <?php while( have_rows('logo_repeater')): the_row();
            $logo = get_sub_field('logo_image');
          ?>
        <div class="lkm-column one-fourth logo-container">
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
  </div>

</section>
<script src="<?php bloginfo('template_directory'); ?>/_js/jquery.cycle2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_js/owl.carousel.min.js"></script>
<script type="text/javascript">
  var $ = jQuery;
  $('.owl-carousel').owlCarousel({
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    loop: true,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed: 500,
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
  })
</script>

<?php get_footer(); ?>
