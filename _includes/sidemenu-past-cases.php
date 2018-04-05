
<!-- Removed from single-resource.php-->
<!-- Tabs -->
<?php
  global $post;
  $resource_category = get_field('resource_category');

  $edPost = lkm_latest_resource($resource_category, 'Charge FAQs');
  $pastPost = lkm_latest_resource($resource_category, 'Past Case');
?>

<?php if (isset($edPost) && isset($pastPost)): ?>
<div class="lkm-slab tabs">
  <div class="content-container lkm-row">
    <a href="<?php echo get_permalink( $edPost ); ?>" class="lkm-column one-half lkm-tab<?php if(get_field('resource_type') != 'Past Case') echo ' lkm-active-tab'; ?>" title="Education">Education</a>
    <a href="<?php echo get_permalink( $pastPost ); ?>" class="lkm-column one-half lkm-tab<?php if(get_field('resource_type') == 'Past Case') echo ' lkm-active-tab'; ?>" title="Past Cases">Past Cases</a>
  </div>
</div>
<?php endif; ?>
<!-- End Tabs -->
<!-- Removed from single-resource.php-->


<!-- Removed from single-resource.php-->
<?php
/*
if(get_field('resource_type') == 'Past Case') {
 get_template_part( '_includes/sidemenu-past-cases');
} else {
get_template_part( '_includes/sidemenu-education');
}
*/
?>
<!-- Removed from single-resource.php-->

<!-- side Menu -->
<?php
  $id = get_the_ID();
  $resource_category = get_field('resource_category', $id);

?>

<!-- Past Cases Menu -->
<?php
    $resource_type = 'Past Case';
    $resource_list = lkm_filtered_resources($resource_category, $resource_type);
    if( count($resource_list) > 0 ) :
    ?>

    <ul class="lkm-side-menu">
      <li>
        <a href="#" class="lkm-side-menu-heading" title="<?php echo $resource_type . 's'; ?>"><?php echo $resource_type . 's'; ?></a>
        <ul>
        <?php
          foreach($resource_list as $resource) :
            $resource_post = get_post($resource);
            setup_postdata($resource_post);

            $menu_item_term = get_field('resource_category', $resource_post->ID);
            $menu_item_type = get_field('resource_type', $resource_post->ID);
        ?>

    <?php if (isset($menu_item_term) && $menu_item_term == $resource_category): ?>
      <?php if (isset($menu_item_type) && $menu_item_type == $resource_type): ?>
            <li><a href="<?php the_permalink($resource); ?>" <?php if($resource == $id) echo 'class="lkm-side-menu-current"'; ?> title="<?php echo get_the_title($resource); ?>"><?php echo get_the_title($resource); ?></a></li>
      <?php endif; ?>
    <?php endif; ?>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
    </ul>
  </li>
</ul>

<?php endif; ?>
<!-- End Menu -->
