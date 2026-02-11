<?php

/** 
 * ADMIN NOTICE
 * Example of how to check the ID of the featured_image, of the current post.
 */

add_action('admin_notices', function() {
  $screen = get_current_screen();
  if ($screen->base === 'post') {
    $id = get_post_thumbnail_id();
    echo "<div class='notice notice-info'><p>Current Featured Image ID: " . ($id ?: 'None') . "</p></div>";
  }
});
