<?php
function custom_search_filter($query) {
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('post', 'services', 'industry', 'case'));
  }
  return $query;
}
add_filter('pre_get_posts','custom_search_filter');
?>