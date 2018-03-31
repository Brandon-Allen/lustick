<?php get_header();
  /* Page Template: Contact */
?>

<section id="content" role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="header">
    <div class="map">
      <iframe src="https://snazzymaps.com/embed/54856" width="100%" height="522px" style="border:none;"></iframe>
    </div>
  </header>

  <div class="lkm-slab contact-content">
    <div class="content-container lkm-row">
        <div class="lkm-column two-thirds">
          <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
          <?php
            gravity_form( 2, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
          ?>

          <div class="disclaimer">
            <h6>Disclaimer</h6>
            <p>By sending your e-mail to Lustick, Kaiman & Madrone PLLC, criminal defense attorneys you understand and agree that unless you are an existing client, information sent to the firm will not be considered confidential, you may not receive a response, and your message does not create an attorney-client relationship with the firm. Do not include any confidential information in your message. Also, please note that the attorney or staff member responding to your inquiry does not seek to practice law in any jurisdiction in which he or she is not properly authorized to do so. All attorneys are limited to practice law in the State of Washington.</p>
          </div>
        </div>

        <div class="lkm-column one-third">
          <div class="number">
            <h5>CALL FOR A FREE CONSULTATION</h6>
            <phone>360 685 4221</phone>
          </div>
          <div class="location">
            <h4 class='location-head'>Location</h6>
            <p>
            <span>Lustick, Kaiman & Madrone</span>
            222 Grand Avenue, Ste A
            Bellingham, WA 98225
            <a href="https://www.google.com/maps/place/Lustick+Kaiman+%26+Madrone+PLLC/@48.753676,-122.4813207,17z/data=!3m1!4b1!4m5!3m4!1s0x5485a3bd35ab95cd:0x2d15514176eea277!8m2!3d48.753676!4d-122.479132">DIRECTIONS</a>
          </p>
        </div>
          <div class="hours">
            <h4 class='hours-head'>Office Hours</h4>
            <p>Monday - Friday: <br>
              8:00A - 5:00P</p>
          </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
