 <?php if (have_rows('rows')){ ?>
<section id="pg-two-col">
    	<div class="wrap">
        	<ul>
            <?php while (have_rows('rows')){ the_row(); ?>
            	<li class="clearfix">
                	<div class="box-one<?php echo get_sub_field('image_position')=='left' ? ' align-left' : ' align-right'?>" style="background-image:url(<?php echo get_acf_image(get_sub_field('image'),'two-column-module')?>);" title="<?php echo get_sub_field('headline'); ?>"></div>
                	<div class="box-two<?php echo get_sub_field('image_position')=='left' ? ' align-right' : ' align-left'?>">
                        <h5><?php echo get_sub_field('category'); ?></h5>
                        <h2><a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('headline'); ?></a></h2>
                        <p><?php echo get_sub_field('subtext'); ?></p>
                        <a href="<?php echo get_sub_field('url'); ?>" class="btn green-btn gray-hover"><?php echo get_sub_field('button_label'); ?></a>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
    </section><!--pg-two-col-->
 <?php } ?>