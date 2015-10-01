<?php

/*
 * Template Name: PV Express Landing
 */

get_header();
?>

<div id="express-banner">
		<ul>
        	<li>
            	<div class="banner-image" style="background-image:url(<?php echo get_acf_image('banner_image','banner-landing'); ?>)" alt="<?php echo get_acf_image_alt('banner_image')?>"></div>
                <div class="banner-text">
                	<div class="wrap">
                    	<div class="text-box">
                        	<h2><?php echo get_field('banner_heading'); ?></h2>
                            <p><?php echo get_field('banner_subtext'); ?></p>
                            <a href="#video1" class="video-popup"><span></span> <?php echo get_field('landing_video_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

<div class="video-popup-wrap" style="display:none">
    	<div id="video1" class="video-box">
        	<?php echo get_field('landing_video'); ?>
        </div>
    </div>

	<section id="sample-setup-wrapper" style="background-image:url(<?php echo get_acf_image('get_started_background_image','express-get-started-bg')?>" alt="<?php echo get_acf_image_alt('get_started_background_image')?>">
    	<div class="wrap">
        	<h2><?php echo get_field('get_started_heading'); ?></h2>
        	<ul id="sample-setup">
            	<li>
                	<div class="image-wrap wow fadeInUp"> 
                    	<img src="<?php bloginfo('url'); ?>/ui/images/pv-express-delivary.png" width="274" height="230" alt=""/>
                    </div>
                     <div class="wow fadeInUp"  >
                    <span>
                    	1
                    </span>
                    <h3>DELIVERY</h3>
                </div>
                </li>
                <li><div class="image-wrap wow fadeInUp" data-wow-delay=".25s"> 
                    	<img src="<?php bloginfo('url'); ?>/ui/images/pv-express-cust.png" width="251" height="352" alt=""/>
                    </div>
                     <div class="wow fadeInUp" data-wow-delay=".25s">
                    <span>
                    	2
                    </span>
                    <h3>CUSTOMIZATION</h3>
                </div>
                </li>
                <li>
                	<div class="image-wrap wow fadeInUp" data-wow-delay=".5s">
                    	<img src="<?php bloginfo('url'); ?>/ui/images/pv-express-training.png" width="244" height="292" alt="" />
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".5s">
	                    <span>
	                    	3
	                    </span>
	                    <h3>TRAINING</h3>
                    <div>
                </li>
                <li>
                	<div class="image-wrap wow fadeInUp" data-wow-delay=".75s">
                    	<img src="<?php bloginfo('url'); ?>/ui/images/pv-express-imple.png" width="237" height="307" alt="" />
                    </div>
                     <div class="wow fadeInUp" data-wow-delay=".75s">
	                    <span>
	                    	4
	                    </span>
	                    <h3>IMPLEMENTATION</h3>
                     <div>
                </li>
            </ul>

            <a href="#" class="green-texture-btn"><?php echo get_field('get_started_button_label'); ?></a>
        </div>
    </section>

    <section id="slider2-wrap" style="background-image:url(<?php echo get_acf_image('testimonial_background','express-testimonial-bg')?>" title="<?php echo htmlentities(get_acf_image_alt('testimonial_background'))?>">
    	<div class="wrap-larg">
        	<h2><?php echo get_field('testimonial_heading');?></h2>

          <?php if (have_rows('testimonials')){ ?>
            <ul id="slider2">
              <?php while (have_rows('testimonials')){ the_row(); ?>
            	<li>
                	<div class="clearfix box-wrapper">
                    	<div class="left-box pull-left">
                        	<img src="<?php echo get_acf_image(get_sub_field('image'),'testimonial-thumb')?>" height="115" width="280" alt="<?php echo get_acf_image_alt(get_sub_field('image'))?>" />
                        </div>
                        <div class="right-box pull-right">
                        	<blockquote>
                            	<p><?php echo get_sub_field('quote')?></p>
                                <h5><?php echo get_sub_field('attribution'); ?></h5>
                            </blockquote>
                        </div>
                    </div>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
    </section>

<?php
/*
 * Flexible content modules
 */
get_template_part("inc/inc-flex-content");
?>

<?php get_footer(); ?>