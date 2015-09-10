<?php

/*
 * Template Name: PV Sullivan Supply Landing
 */

get_header();
?>

    <section id="banner-wrapper">
    	<ul id="banner">
        	<li>
            	<div class="banner-top-wrap">
                	<div class="banner-image" style="background-image:url(<?php echo get_acf_image('banner_image','sullivan-home-banner') ?>)"/></div>
                	<div class="banner-txt">
                    	<div class="wrap">
                        	<div class="v-middle-wrap">
                            	<h3><?php echo get_field('heading'); ?></h3>
                                <p><?php echo get_field('subheading'); ?></p>
                                <a href="<?php echo get_field('call_to_action_page') ?>" class="btn green-btn"><?php echo get_field('call_to_action_label') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
   </section>

<?php
/*
 * Flexible content modules
 */
get_template_part("inc/inc-flex-content");
?>

<?php get_footer(); ?>