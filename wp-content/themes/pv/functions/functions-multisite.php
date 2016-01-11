<?php

/* ========================================================================= */
/* !MULTISITE SUPPORT */
/* ========================================================================= */
/*
 * Return the ID for a site, based on a term. If no term is provided, return the MAIN site ID (where globals are stored)
 * This allows us to grab information about another site for links/etc
 *
 */
function get_site_id($term=''){
  $values = array(
      ''=>1,
      'sullivan'=>1,
      'express'=>2,
      'bathworks'=>3
  );
  return $values[$term];
}

/*
 * Retrieve bloginfo from a site
 */
function get_multisite_bloginfo($blog_id,$field_name){
  switch_to_blog($blog_id);
  $value = get_bloginfo($field_name);
  restore_current_blog();
  return $value;
}

/*
 * Display nav menus from other sites
 */
 function wp_multisite_nav_menu( $args = array(), $origin_id = 1 ) {
  global $blog_id;
  $origin_id = absint( $origin_id );
  if ( !is_multisite() || $origin_id == $blog_id ) {
      return wp_nav_menu( $args );
  }
  switch_to_blog( $origin_id );
  $response = wp_nav_menu( $args );
  restore_current_blog();
  return $response;
}

/*
 * Retrieve ACF fields from other sites
 */
function get_multisite_field($field_name,$blog_id='',$post_id=null,$format_value=true){
  if (empty($blog_id)) $blog_id=get_site_id(); // default is the MAIN site
  switch_to_blog($blog_id);
  $value = get_field($field_name,$post_id,$format_value);
  restore_current_blog();
  return $value;
}

/*
 * Get attachment information about an image on any site
 */
function get_multisite_attachment_image_src($img_id,$size,$blog_id=null){
  if (empty($blog_id)){
    $blog_id = get_site_id(); // main site for global resources
  }
  switch_to_blog($blog_id);
  $image = wp_get_attachment_image_src($img_id,$size);
  restore_current_blog();
  return $image;
}
?>