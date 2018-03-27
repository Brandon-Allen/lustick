<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <!-- Style Sheets -->
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_fontawesomeCSS/fontawesome-all.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_fontawesomeCSS/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/_fontawesomeCSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/style.css">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i,800,900" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">

      <div class="header-wrapper">

        <div class="social-number-container">
          <div class="social">
            <i class="fab fa-facebook-square"></i>
          </div>
          <span>FREE CASE EVALUATION:</span>
          <phone>360 685 4221</phone>
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
              <i class="fas fa-search"></i>
              <div class="search-wrapper">
                <?php get_search_form(); ?>
              </div>
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

<div id="container">
