<?php get_header(); ?>
<section id="content" role="main">
  <div class="lkm-slab team-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column two-thirds nav-text-content">
        <p><span>OUR GOAL IS EXCELLENCE IN EVERYTHING WE DO.</span> Our clients deserve the best defense. They should know their lawyers, their histories, what to expect and when. We commit our entire team to every client, a unique advantage of multiple perspectives, combined brainpower and experience for a stronger defense and a better outcome.</p>
      </div>
      <div class="lkm-column one-third nav-container">
        <?php wp_nav_menu( array( 'theme_location' => 'team-menu' ) ); ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab single-header">
    <div class="content-container lkm-row">
      <div class="lkm-column two-thirds single-hero">
        <?php
          $image = get_field('member_hero_image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $image ) {
          	echo wp_get_attachment_image( $image, $size );
          }
        ?>
      </div>

      <div class="lkm-column one-third single-hero-content">
        <div class="name-title-container">
          <h1><?php the_field('team_member_name'); ?></h1>
          <h5><?php the_field( 'title' ) ?></h5>
        </div>

        <div class="contact-container">
          <h4>CONTACT</h4>
          <ul>
            <li>Phone:<span><?php the_field( 'phone' ); ?></span></li>
            <li>Fax:<span><?php the_field( 'fax' ); ?></span></li>
            <li>Email:<span><?php the_field( 'email' ); ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="lkm-slab">
    <div id="equalHeight" class="content-container lkm-row">
      <div class="lkm-column one-third sidebar-column">
        <div class="practice-areas">
          <h4><i class="far fa-gavel"></i>PRACTICE AREAS</h4>
          <?php if(have_rows('practice_areas')): ?>
          <ul>
            <?php while(have_rows('practice_areas')): the_row();
              $area = get_sub_field('area');
              $areaLink = get_sub_field('practice_area_link')
            ?>
            <li><a href="<?php echo $areaLink; ?>"><?php echo $area; ?></a></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
          <span class='line'></span>
        </div>

        <div class="education">
          <h4><i class="far fa-graduation-cap"></i>Education</h4>
          <?php if(have_rows('education')): ?>
          <ul>
            <?php while(have_rows('education')): the_row();
                $school = get_sub_field('school');
                $date = get_sub_field('date_accomplishments');
            ?>
            <li>
              <?php echo $school; ?>
              <span><?php echo $date; ?></span>
            </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
          <span class='line'></span>
        </div>

        <div class="honors">
          <?php if(have_rows('honors')): ?>
          <h4><i class="far fa-trophy-alt"></i>Honors</h4>
          <ul>
            <?php while(have_rows('honors')): the_row();
                $title = get_sub_field('honor_title');
                $who = get_sub_field('organization_title');
            ?>
            <li>
              <?php echo $title; ?>
              <span><?php echo $who; ?></span>
            </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        </div>
      </div>

      <div class="lkm-column two-thirds content-column">
        <div class="profile-content">
          <?php the_field( 'bio' ) ?>
        </div>

          <?php if(have_rows('courts')): ?>
            <div class="court-admit">
            <h4><i class="far fa-university"></i>ADMITTED TO THE FOLLOWING COURTS</h4>
            <ul>
            <?php while(have_rows('courts')): the_row();
              $bobby = get_sub_field('courts_admitted');
            ?>
            <li><?php echo $bobby; ?></li>
            <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>

        <div class="areas-interest">
          <?php if(get_field('areas_of_interest')): ?>
            <h4><i class="far fa-star"></i>Area of Interests</h4>
            <?php the_field('areas_of_interest') ?>
          <?php endif; ?>
        </div>
        <!-- <footer class="footer"><?php get_template_part( 'nav', 'below-single' ); ?></footer> -->
      </div><!-- two-thirds end -->
    </div>
  </div>

  <div class="lkm-slab sub-quote-form">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third single-quote">
      <?php if(get_field('footer_quote')):?>
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
      <?php else: ?>
        <div class="podcast-footer-container">
          <div class="icon-container">
            <img src="<?php bloginfo('template_directory'); ?>/_images/icon-podcast.svg" alt="Podcast Icon">
          </div>
          <h5>CHECK OUT OUR POCAST</h5>
          <h3>JUSTICE ON TRIAL</h3>
          <a href="/podcasts/">LISTEN NOW</a>
        </div>
      <?php endif; ?>
      </div>

      <!-- Consultation form include -->
      <?php include '_includes/consultation-form.php' ?>
    </div>
  </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/_js/jquery.matchHeight.js" charset="utf-8"></script>
<script type="text/javascript">
  var $ = jQuery;
  $(function() {
    $('#equalHeight > .lkm-column').matchHeight();
  });
</script>

<?php get_footer(); ?>
