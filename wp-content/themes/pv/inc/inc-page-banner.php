<section id="pg-banner" class="top-shadow">
		<?php
			$img_id = get_post_thumbnail_id($post->ID); 
			$image = wp_get_attachment_image_src($img_id, 'banner-inner'); 
			$imageMob = wp_get_attachment_image_src($img_id, 'banner-inner-mobile');
		?>
    	<div class="banner-desktop hidden-s pg-banner" style="background-image:url(<?php echo $image[0]; ?>)"></div>
        <div class="pg-banner top-shadow banner-mobile visible-s" style="background-image:url(<?php echo $imageMob[0]; ?>)"></div>
</section>