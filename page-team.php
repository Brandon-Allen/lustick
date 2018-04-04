<?php get_header();
  /* Template Name: Team */
?>

<section id="content" class="sub-team-content" role="main">
  <?php if( get_field('single_hero_image') ): ?>
  <header class="lkm-slab sub-header team" style="background-image: url('<?php the_field('single_hero_image'); ?>');">
  <?php endif; ?>
    <div class="content-container lkm-row">
      <div class="lkm-column whole team-landing-title">
        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        <h2 class="page-headline"><?php the_field('single_hero_text'); ?></h2>
      </div>
    </div>
  </header>

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

  <?php
    $args = array(
      'post_type' => 'team-member',
      'post_per_page' => -1,
      'order_by' => 'menu_order',
      'order' =>  'ASC',
      'category_name' => 'attorney'
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
    ?>
    <div class="lkm-slab profile-title-container">
      <div class="content-container lkm-row">
        <div class="lkm-column whole profile-title">
          <h2>ATTORNEYS</h2>
          <span></span>
        </div>
      </div>
    </div>
  	<div class="lkm-slab">
    <div class="content-container lkm-row profile-grid">
    <?php
  	while ( $the_query->have_posts() ) {
  		$the_query->the_post();
      ?>
      <div class="lkm-column one-third-grid profile-container">
        <a href="<?php echo get_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <div class="profile-content-container">
          <h3><?php the_field('team_member_name'); ?></h3>
          <p><?php the_field('title'); ?></p>
        </div>
        </a>
      </div>
      <?php
  	}
    ?>
    </div>
  	</div>
    <?php
  	/* Restore original Post Data */
  	wp_reset_postdata();
  }
  ?>

  <?php
    $args = array(
      'post_type' => 'team-member',
      'post_per_page' => -1,
      'order_by' => 'menu_order',
      'order' =>  'ASC',
      'category_name' => 'paralegal'
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
    ?>
    <div class="lkm-slab profile-title-container">
      <div class="content-container lkm-row">
        <div class="lkm-column whole profile-title-2">
          <h2>PARALEGAL & ADMINISTRATION</h2>
          <span></span>
        </div>
      </div>
    </div>
  	<div class="lkm-slab">
      <div class="content-container lkm-row profile-grid">
    <?php
  	while ( $the_query->have_posts() ) {
  		$the_query->the_post();
      ?>
      <div class="lkm-column one-third-grid profile-container">
        <a href="<?php echo get_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <div class="profile-content-container">
          <h3><?php the_field('team_member_name'); ?></h3>
          <p><?php the_field('title'); ?></p>
        </div>
        </a>
      </div>
      <?php
  	}
    ?>
    </div>
  	</div>
    <?php
  	/* Restore original Post Data */
  	wp_reset_postdata();
  }
  ?>


</section>

<?php get_footer(); ?>
