<?php
	if($link = get_field('ecommerce_link')){
		wp_redirect($link, 301);
		exit();
	}
	get_header(); the_post(); ?>

<?php get_template_part('inc/inc','page-banner'); ?>

    <section class="pg-module">
    	<div class="wrap pg-content">
        	<div class="pg-top clearfix">
                <div class="pull-left main-left">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="pull-right main-right">
                    <?php the_content(); ?>
                </div>
            </div><!--pg-top-->
        </div>
    </section>

    <?php if(have_rows('product_page_options')) : while(have_rows('product_page_options')) : the_row(); ?>

<?php if(get_row_layout() == 'product_carousel') { ?>
  <?php $slides = 0; if (have_rows('carousel_images')){ ?>
    <section id="product-detail" class="pg-module">
        <ul id="product-carousel">

          <?php while(have_rows('carousel_images')){ the_row(); ?>
            <li>
                <img src="<?php echo get_acf_image(get_sub_field('product_image'),'product-thumbnail')?>" alt="<?php echo get_acf_image_alt(get_sub_field('product_image'))?>" />
                <h5><?php echo get_sub_field('product_name');?></h5>
                <span><?php echo get_sub_field('product_model_name');?></span>
            </li>
          <?php $slides++; } $slidenum = $slides - 1;?>

        </ul>
    </section>
<script>
_productCarousel(<?php echo $slidenum; ?>);
</script>

  <?php } ?>
    <?php } elseif(get_row_layout() == 'page_content') { ?>
    <section class="pg-module <?php if(have_rows('brands')) {echo 'brands-module'; } ?>">
    	<div class="wrap single-pg-content">
        	<div class="pg-body clearfix">
            	<div class="pull-left main-left">
                	<?php if($side = get_sub_field('side_image')) { ?><img src="<?php echo $side['sizes']['side-image']; ?>" alt="" /><?php } ?>
                </div>
                <div class="pull-right main-right">
                	<?php if($con = get_sub_field('content')) { ?>
                	<div class="pg-content">
                    	<?php echo $con; ?>
                    </div> <!--pg-content-->

                    <?php } ?>


				<?php if(have_rows('brands')) : ?>
                    <div class="brands">
                    	<h4>BRANDS</h4>

                        <ul>
                        	<?php while(have_rows('brands')) : the_row();
                        	 	if($img = get_sub_field('brand_logo')) {
                        	?>
                        		<li>
                        			<?php if($link = get_sub_field('brand_link')) { ?><a href="<?php the_sub_field('brand_link'); ?>"><?php } ?>
                        				<img src="<?php echo $img['sizes']['brand-logo']; ?>" width="125" height="27" alt="<?php the_sub_field('brand_name'); ?>"/>
                        			<?php if($link){ ?></a><?php } ?>
                        		</li>
                       		<?php } endwhile; ?>
                        </ul>
                    </div><!--brands-->

                    <div class="pg-content">
                    	<ul>
                    		<?php while(have_rows('brands')) : the_row();
                    		if(!get_sub_field('brand_logo')) {
                    		?>
                            <li>
                            	<?php if($link = get_sub_field('brand_link')) { ?><a href="<?php the_sub_field('brand_link'); ?>"><?php } ?>
                            		<?php the_sub_field('brand_name'); ?>
                            	<?php if($link){ ?></a><?php } ?>
                            </li>
                            <?php } endwhile; ?>
                        </ul>
                    </div>

				<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
