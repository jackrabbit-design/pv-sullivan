<?php

/*
 * Template Name: Multi-Site Landing Page
 *
 * Primary landing page template (displays links to internal sites)
 */

get_header();
?>
    <section id="landing-banner">
    	<ul>
        	<li>
            	<div class="banner-image" style="background-image:url(<?php echo get_acf_image('banner_image','banner-landing') ?>);"  title="<?php echo htmlentities(get_acf_image_alt('banner_image'))?>" /></div>
                <div class="banner-text">
                	<div class="wrap">
                    	<div class="text-box">
                        	<div class="text-box-wrap">
                            	<h3><?php the_field('heading'); ?></h3>
                        		<p><?php the_field('sub-heading'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section id="landing-callout-wrapper">
    	<div class="wrap">
        	<ul id="landing-callout">
            	<li>
                	<a href="<?php echo get_field('pv_sullivan_url','options') ?>">
                    	<div class="middle-circle"></div>
                        <div class="logo-s">
                        	<img src="ui/images/pv-logo.png" class="def" width="222" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('sullivan'),'name'); ?>" />
                            <img src="ui/images/pv-supply-white.png" class="hover" width="222" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('sullivan'),'name'); ?>" />
                        </div>

                        <h3><?php echo get_field('pv_sullivan_heading'); ?></h3>
                        <p><?php echo get_field('pv_sullivan_subheading'); ?></p>

                        <span class="link green-link"><?php echo get_field('pv_sullivan_call_to_action_label') ?></span>
                    </a>
                </li>
                <li>
                	<a href="<?php echo get_field('pv_express_url','options') ?>">
                    	<div class="middle-circle"></div>
                        <div class="logo-s">
                        	<img src="ui/images/pv-express-logo.png" class="def" width="206" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('express'),'name'); ?>" />
                            <img src="ui/images/pv-express-white.png" class="hover" width="206" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('express'),'name'); ?>" />
                        </div>

                        <h3><?php echo get_field('pv_express_heading'); ?></h3>
                        <p><?php echo get_field('pv_express_subheading'); ?></p>

                        <span class="link green-link"><?php echo get_field('pv_express_call_to_action_label'); ?></span>
                    </a>
                </li>
                <li>
                	<a href="<?php echo get_field('pv_bathworks_url','options') ?>">
                    	<div class="middle-circle"></div>
                        <div class="logo-s">
                        	<img src="ui/images/pv-bath-logo.png" width="231" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('bathworks'),'name'); ?>" class="def" />
                            <img src="ui/images/pv-bath-white.png" width="231" height="130" alt="<?php echo get_multisite_bloginfo(get_site_id('bathworks'),'name'); ?>" class="hover" />
                        </div>

                        <h3><?php echo get_field('pv_bathworks_heading') ?></h3>
                        <p><?php echo get_field('pv_bathworks_subheading') ?></p>

                        <span class="link green-link"><?php echo get_field('pv_bathworks_call_to_action_label') ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

<?php
get_footer();
?>