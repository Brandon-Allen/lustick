<script src="<?php bloginfo( 'template_directory' ) ?>/_js/base.js" type="text/javascript" charset="utf-8"></script>
<div class="clear"></div>
</div>
<div class="footer-top"></div>
<footer id="footer" role="contentinfo">

  <div class="lkm-slab footer-content">
    <div class="content-container lkm-row">
      <div class="lkm-column one-sixth">
        <div class="footer-logo"><img src="<?php bloginfo('template_directory')?>/_images/logo-footer-lustick.png" alt="Lustick Kaiman and Madrone Logo"></div>
      </div>
      <div class="lkm-column one-sixth footer-contact">
        <p class="address">222 Grand Ave., Ste A Bellingham, WA 98225</p>
        <a class="phone">360 685 4221</a>
        <a class="fax">360 734 4222	Fax</a>
        <a class="email" href="mailto:info@lustick.com">info@lustick.com </a>
      </div>

      <div class="lkm-column one-third footer-links">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-01' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-02' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-03' ) ); ?>
      </div>
    </div>
  </div>
  <!-- <div class="footer-background"></div> -->
  <div class="map">
    <iframe src="https://snazzymaps.com/embed/54856" width="100%" height="100%" style="border:none;"></iframe>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
