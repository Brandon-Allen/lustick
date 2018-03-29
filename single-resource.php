<?php get_header(); ?>

<section id="content" role="main">

  <div class="lkm-slab resource-nav">
    <div class="content-container lkm-row">
      <div class="lkm-column three-fourths nav-text-content">
        <p><span>YOUR PROBLEMS ARE OUR PROBLEMS.</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
      </div>
      <div class="lkm-column one-fourth nav-container">
        <?php wp_nav_menu( array( 'theme_location' => 'practice-menu' ) ); ?>
      </div>
    </div>
  </div>

<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_footer(); ?>
