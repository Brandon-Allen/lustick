<!-- side Menu -->
<?php
  $id = get_the_ID();
  $resource_category = get_field('resource_category', $id);

?>

<!-- Charge FAQs Menu -->
<?php
    $resource_type = 'Charge FAQs';
    $resource_list = lkm_filtered_resources($resource_category, $resource_type);

    if( count($resource_list) > 0 ) :
    ?>

    <ul class="lkm-side-menu">
        <?php
          $resource = $resource_list[0];
          $resource_post = get_post($resource);
          setup_postdata($resource_post);

          $menu_item_term = get_field('resource_category', $resource_post->ID);
          $menu_item_type = get_field('resource_type', $resource_post->ID);
        ?>
        <?php if (isset($menu_item_term) && $menu_item_term == $resource_category): ?>
          <?php if (isset($menu_item_type) && $menu_item_type == $resource_type): ?>
                <li><a href="<?php the_permalink($resource); ?>" class="lkm-side-menu-heading" title="<?php echo $resource_type; ?>"><?php echo $resource_type; ?></a></li>
          <?php endif; ?>
        <?php endif; ?>
      </ul>

<?php endif; ?>
<!-- End Charge FAQs Menu -->



<!-- Article Menu -->


<?php
    $resource_type = 'Article';
    $resource_list = lkm_filtered_resources($resource_category, $resource_type);
    if( count($resource_list) > 0 ) :
    ?>

    <ul class="lkm-side-menu">
      <li>
        <a href="#" class="lkm-side-menu-heading" title="Articles">Articles</a>
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
