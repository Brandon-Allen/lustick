<?php get_header(); ?>
<section id="content" role="main">
  <div class="lkm-slab team-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths nav-text-content">
        <p><span>OUR GOAL IS EXCELLENCE IN EVERYTHING WE DO.</span> Our clients deserve the best defense. They should know their lawyers, their histories, what to expect and when. We commit our entire team to every client, a unique advantage of multiple perspectives, combined brainpower and experience for a stronger defense and a better outcome.</p>
      </div>
      <div class="lkm-column one-fourth nav-container">
        <?php wp_nav_menu( array( 'theme_location' => 'team-menu' ) ); ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab single-header">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third single-hero-content">
        <h1><?php the_field('team_member_name'); ?></h1>
        <h5><?php the_field( 'title' ) ?></h5>

        <h4>CONTACT</h4>
        <ul>
          <li>Phone:<span><?php the_field( 'phone' ); ?></span></li>
          <li>Fax:<span><?php the_field( 'fax' ); ?></span></li>
          <li>Email:<span><?php the_field( 'email' ); ?></span></li>
        </ul>
      </div>

      <div class="lkm-column two-thirds single-hero">
        <?php
          $image = get_field('member_hero_image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $image ) {
          	echo wp_get_attachment_image( $image, $size );
          }
        ?>
      </div>
    </div>
  </div>

  <div class="lkm-slab">
    <div class="content-container lkm-row">
      <div class="lkm-column one-third">
        <div class="practice-areas">
          <h4><i class="far fa-gavel"></i>PRACTICE AREAS</h4>
          <ul>
            <li>Aviation Law</li>
            <li>DUI & DWI Defense</li>
            <li>Federal Criminal Defense</li>
            <li>Military Law</li>
            <li>Misdemeanor and Felony Criminal Defense</li>
            <li>Probation Violation Defense</li>
            <li>Post-Conviction</li>
            <li>Post-Trial Appeals</li>
            <li>Traffic Law Defense</li>
          </ul>
          <span class='line'></span>
        </div>

        <div class="education">
          <h4><i class="far fa-graduation-cap"></i>Education</h4>
          <ul>
            <li>
              Gonzaga University, School of Law
              <span>Juris Doctor Cum Laude (1997)</span>
            </li>

            <li>
              Western Washington University
              <span>Bachelor of Arts (1993)</span>
            </li>

            <li>
              Skagit Valley College
              <span>Associate of Arts Degree (1991)</span>
            </li>
          </ul>
          <span class='line'></span>
        </div>

        <div class="honors">
          <h4><i class="far fa-trophy-alt"></i>Honors</h4>
          <ul>
            <li>
              Top 100 Trial Lawyers
              <span>by National Trial Lawyers organization 2012-2016</span>
            </li>

            <li>
              Top 100 DUI Attorneys in Washington
              <span>National Advocacy for DUI Defense, 2013-2106</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="lkm-column two-thirds">
        <div class="profile-content">
          <?php the_field( 'bio' ) ?>
        </div>

        <div class="court-admit">
          <h4><i class="far fa-university"></i>ADMITTED TO THE FOLLOWING COURTS</h4>
          <ul>
            <li>U.S. Supreme Court </li>
            <li>The Washington State Supreme Court</li>
            <li>The Washington State Court of Appeals</li>
            <li>All WA State Superior, District & Municipal Courts</li>
            <li>U.S. Court of Appeals for the Federal Circuit</li>
            <li>U.S. Court of Appeals for the Armed Forces</li>
            <li>U.S. United States Court of Veterans Appeals</li>
            <li>U.S. Court of Federal Claims</li>
            <li>U.S. Tax Court</li>
            <li>U.S. District Court for the District of Nebraska</li>
            <li>U.S. District Court for the Western District of WA</li>
            <li>U.S. Air Force Court of Criminal Appeals</li>
            <li>U.S. Navy and Marine Corps Court of Criminal Appeals</li>
            <li>Lummi Indian Nation Tribal Court</li>
            <li>Admitted to practice before the FAA and the NTSB</li>
          </ul>
        </div>

        <div class="areas-interest">
          <h4><i class="far fa-star"></i>ADMITTED TO THE FOLLOWING COURTS</h4>
          <p>Jeffrey Lustick shares his passion for aviation on Instagram @hawkpilot9al. He also provides aviation legal consulting for individual pilots, aircraft owners, and to the news media and the aviation industry.</p>
        </div>
        <!-- <footer class="footer"><?php get_template_part( 'nav', 'below-single' ); ?></footer> -->
      </div><!-- two-thirds end -->
    </div>
  </div>

  <<div class="lkm-slab sub-quote-form">
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
