<section id="pg-banner" class="top-shadow">
		<?php
			$img_id = get_post_thumbnail_id($post->ID);
      // use fallback banner image if one was not provided for this page
      if (empty($img_id)){
        $img_id = get_multisite_field('general_interior_banner',null,'options');
        $image = get_multisite_attachment_image_src($img_id, 'banner-inner');
        $imageMob = get_multisite_attachment_image_src($img_id, 'banner-inner-mobile');
      }else{
        $image = wp_get_attachment_image_src($img_id, 'banner-inner');
        $imageMob = wp_get_attachment_image_src($img_id, 'banner-inner-mobile');
      }
		?>
    	<div class="banner-desktop hidden-s pg-banner" style="background-image:url(<?php echo $image[0]; ?>)"></div>
        <div class="pg-banner top-shadow banner-mobile visible-s" style="background-image:url(<?php echo $imageMob[0]; ?>)"></div>
</section>