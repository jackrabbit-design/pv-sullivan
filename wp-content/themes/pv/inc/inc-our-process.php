<?php if(have_rows('our_process')) : ?>
<section class="our-process">
	<div class="wrap">
		<h2>Our Process</h2>
	

			<ul>	
	<?php
		$c = 1; 
		 while(have_rows('our_process')) : the_row(); 
		 $img = get_sub_field('icon_image'); 
		 	
		 	if($c == 1){
			 	$delay = '.0s';
		 	} elseif($c == 2){
			 	$delay = '.25s';
		 	} elseif($c == 3){
			 	$delay = '.5s';
			} elseif($c == 4){
				$delay = '.75s';
			}
		 ?>
			
		
	 		<li>
            	<div class="image-wrap wow fadeInUp" data-wow-delay="<?php echo $delay; ?>">
                	<img src="<?php echo $img['url']; ?>"/>
                </div>
                 <div class="wow fadeInUp" data-wow-delay="<?php echo $delay; ?>">
                    <span>
                    	<?php echo $c; ?>
                    </span>
                    <?php the_sub_field('content'); ?>
                 <div>
            </li>
	
		
		<?php $c++; endwhile; ?>
		</ul>
		<div class="bottom">
		<?php the_field('bottom_content'); ?>
		</div>
		</div>
</section>

<?php endif; ?>