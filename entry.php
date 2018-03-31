<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <h1><?php the_title(); ?></h1> <?php edit_post_link(); ?>
    <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  </header>

  <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>
