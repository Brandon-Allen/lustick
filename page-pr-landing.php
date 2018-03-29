<?php get_header();
/* Template Name: PR-Landing */
?>

<section id="content" role="main">
  <header class="lkm-slab sub-header cycle-slideshow"
    data-cycle-timeout="5000"
    data-cycle-slides="> div.landing"
  >
    <?php if( have_rows('landing_hero')): ?>
      <?php while( have_rows('landing_hero')): the_row();
        $image = get_sub_field('landing_hero_image');
        $headline = get_sub_field('landing_headline');
        $subhead = get_sub_field('landing_sub_headline');
        $link = get_sub_field('landing_hero_link');
    ?>
    <div class="landing" style="background-image:url('<?php echo $image['url']; ?>')">
      <div class="content-container lkm-row">
        <div class="lkm-column whole">
          <h1 class="entry-title"><?php the_title(); ?></h1> <span id="editpost"><?php edit_post_link(); ?></span>
          <h2 class="page-headline"><?php echo $headline; ?></h2>
          <p>
            <?php echo $subhead; ?>
            <?php if($link): ?>
              <a href="<?php echo $link ?>">LEARN MORE</a>
            <?php endif; ?>
          </p>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </header>

  <div class="lkm-slab practice-grid">
    <div class="content-container lkm-row">
      <div class="lkm-column whole landing-intro">
          <h3 class='intro-heading'><?php the_field('page_text_headline'); ?></h3>
          <p class='intro-copy'><?php the_field('page_text_body_copy'); ?></p>
      </div>
      <div class="lkm-column whole">
        <?php if(have_rows('section_tiles')): ?>
          <?php while(have_rows('section_tiles')): the_row();
            $background = get_sub_field('tile_background_photo');
            $icon = get_sub_field('icon');
            $title = get_sub_field('tile_title_text');
            $sub = get_sub_field('supporting_tile_title_text');
            $link = get_sub_field('tile_link');
          ?>
        <div class="lkm-column one-third-grid practice-container">
          <div class="practice-img-container">
            <img src="<?php echo $background['url']; ?>" alt="<?php echo $background['alt']; ?>">
            <span><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></span>
            <h3><?php echo $title; ?></h3>
            <?php if( $sub ):  ?>
              <p><?php echo $sub; ?></hp>
            <?php endif; ?>
          </div>
          <a href="<?php echo $link; ?>">Learn More</a>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>


      </div>
    </div>
  </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/_js/jquery.cycle2.js"></script>


<?php get_footer(); ?>
