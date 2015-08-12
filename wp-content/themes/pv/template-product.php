<?php 
/*Template Name: Product*/
get_header(); the_post(); ?>

<?php get_template_part('inc/inc','page-banner'); ?>

    <section class="pg-module">
    	<div class="wrap pg-content">
        	<div class="pg-top clearfix">
                <div class="pull-left main-left">
                    <h2><?php the_title(); ?></h2>
                    <a href="#" class="btn green-btn gray-hover">VISIT MYPLUMBINGSHOWROOM.COM</a>
                </div>
                <div class="pull-right main-right">
                    <?php the_content(); ?>
                </div>
            </div><!--pg-top-->
           
        </div>
    </section>
    <?php query_posts(array('post_type' => 'products', 'posts_per_page' => -1)); if(have_posts()) : ?>
    <section id="products-wrap" class="pg-module">
    	<div class="wrap">
        	<ul id="products">
			<?php while(have_posts()) : the_post(); ?>
            	<li>
                	<a href="<?php the_permalink(); ?>">
                    	<div class="img-wrap">
                    		<?php
								$img_id = get_post_thumbnail_id($post->ID); 
								$image = wp_get_attachment_image_src($img_id, 'project-landing'); 
							?>
                        	<img src="<?php echo $image[0]; ?>"  alt="<?php the_title(); ?>" />
                            <div class="hover-box">
                            	<span class="btn white-btn">VIEW ALL</span>
                            </div>
                        </div>
                        
                        <div class="text-box">
                        	<h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>