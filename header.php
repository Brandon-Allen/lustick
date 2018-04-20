<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <!-- Style Sheets -->
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i,800,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_vendorCSS/fontawesome-all.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_vendorCSS/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_vendorCSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_vendorCSS/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/style.css">

  <?php wp_head(); ?>
</head>

<body id="page-<?php echo lustick_slug(); ?>" <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">

      <div class="header-wrapper">

        <div class="social-number-container">
          <div class="social">
            <a href="https://www.facebook.com/LustickKaimanMadrone/" target="_blank"><i class="fab fa-facebook-square"></i></a>
          </div>
          <span>FREE CASE EVALUATION:</span>
          <a class="phone">360 685 4221</a>
        </div>

        <section id="branding">
          <div id="site-title">
            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                <img src="<?php bloginfo('template_directory')?>/_images/logo-header-lustick.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" />
              </a>
            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
          </div>
          <div id="site-description"><?php bloginfo( 'description' ); ?></div>
        </section>

        <section class="nav-wrapper">
          <nav id="menu" role="navigation">
            <div id="search">
              <i class="fas fa-search search-form-trigger"></i>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
          </nav>

          <div class="mobile-nav">
            <div id='trigger' class="mobile-trigger"><i class="fas fa-bars"></i></div>
            <div class="mobile-nav-container">
              <i class="far fa-times"></i>
              <div id="search">
                <div class="search-wrapper">
                  <?php get_search_form(); ?>
                </div>
              </div>
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
            </div>
        </section>

      </div><!-- Header Wrapper End -->
    </header>

    <div class="lkm-slab search-container">
      <div class="content-container lkm-row">
        <div class="lkm-column whole">
            <div class="search-wrapper-desktop">
              <?php get_search_form(); ?>
            </div>
        </div>
      </div>
    </div>

<div id="container">
