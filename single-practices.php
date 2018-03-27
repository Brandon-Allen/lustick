<?php get_header(); ?>

<section id="content" role="main">
  <div class="lkm-slab practice-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths nav-text-content">
        <p><span>YOUR PROBLEMS ARE OUR PROBLEMS.</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
      </div>
      <div class="lkm-column one-fourth nav-container">
        <?php wp_nav_menu( array( 'theme_location' => 'practice-menu' ) ); ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab practice-header">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third practice-hero-content">
        <h1><?php the_field('practice_title'); ?></h1>
        <h3>Our Team of Attorneys</h3>
        <?php if(have_rows('practice_attorneys')): ?>
          <?php while(have_rows('practice_attorneys')): the_row();
              $image = get_sub_field('attorney_image');
              $first = get_sub_field('attorney_first_name');
              $last = get_sub_field('attorney_last_name');
              $link = get_sub_field('attorney_page_link');
          ?>
          <a class="attorney-link" href="<?php echo $link; ?>">
          <div class="attorney-container">
            <div class="image-container lkm-column one-fourth">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <div class="name-container">
              <h4><?php echo $first ?></h4>
              <h4><?php echo $last ?></h4>
            </div>
          </div>
          </a>
          <?php endwhile; ?>
          <?php endif; ?>
      </div>

      <div class="lkm-column two-thirds practice-hero">
        <?php
          // check if the flexible content field has rows of data
          if( have_rows('flexible_hero_content') ):
               // loop through the rows of data
              while ( have_rows('flexible_hero_content') ) : the_row();
                  if( get_row_layout() == 'image' ):
                  	$image = get_sub_field('practice_hero_image');
                  ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php
                  elseif( get_row_layout() == 'video' ):
                  	$video = get_sub_field('video_link');
                  ?>
                    <div class="embed-container"><?php echo $video ?></div>
                  <?php
                  endif;
              endwhile;
          else :
              // no layouts found
          endif;
        ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab practice-area-content">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third practice-content-lists">
        <div class="single-list">
          <h4><i class="far fa-balance-scale"></i>Charges</h4>
          <?php if(have_rows('charges_list')): ?>
            <?php while(have_rows('charges_list')): the_row();
                $charge = get_sub_field('charges_title');
                $excerpt = get_sub_field('charge_excerpt');
                $link = get_sub_field('charge_article_link');
            ?>
            <h5><?php echo $charge ?></h5>
            <p><?php echo $excerpt ?></p>
            <a href="<?php echo $link ?>">Read More<i class="far fa-chevron-right"></i></a>
          <?php endwhile; ?>
        <?php endif; ?>
        <a class="see-more"  href="#" alt="">SEE MORE +</a>
        <span class="line"></span>
        </div>

        <div class="single-list">
          <h4><i class="far fa-newspaper"></i>Articles</h4>
          <?php if(have_rows('article_list')): ?>
            <?php while(have_rows('article_list')): the_row();
                $article = get_sub_field('article_title');
                $excerpt = get_sub_field('article_excerpt');
                $link = get_sub_field('article_link');
            ?>
            <h5><?php echo $article ?></h5>
            <p><?php echo $excerpt ?></p>
            <a href="<?php echo $link ?>">Read More<i class="far fa-chevron-right"></i></a>
          <?php endwhile; ?>
        <?php endif; ?>
        <a class="see-more" href="#" alt="">Articles Page +</a>
        </div>
      </div>

      <div class="lkm-column two-thirds practice-main-content">
        <h4>OUR PROCESS</h4>
        <?php the_field('practice_process'); ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab sub-quote-form">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third single-quote">
        <div class="quote-header-container">
          <i class="fas fa-quote-left"></i>
            <span></span>
        </div>
        <?php if(have_rows('footer_quote')): ?>
          <?php while(have_rows('footer_quote')): the_row();
              $quote = get_sub_field('quote');
              $client = get_sub_field('client_name');
              $type = get_sub_field('client_type_and_location');
          ?>
        <quote><i class="fas fa-quote-left"></i><?php echo $quote; ?><i class="fas fa-quote-right"></i></quote>
        <p class="name"><?php echo $client; ?></p>
        <p class="type"><?php echo $type; ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>

      <div class="lkm-column two-thirds form-container sub-footer-form">
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
