<?php
/*Template Name: Product*/
get_header(); the_post(); ?>

<?php get_template_part('inc/inc','page-banner'); ?>

    <section class="pg-module">
    	<div class="wrap pg-content">
        	<div class="pg-top clearfix">
                <div class="pull-left main-left">
                    <h2><?php the_title(); ?></h2>
                    <?php if(get_field('sidebar_button_link') && get_field('sidebar_button_name')) { ?>
                    	<a href="<?php the_field('sidebar_button_link'); ?>" class="btn green-btn gray-hover"><?php the_field('sidebar_button_name'); ?></a>
                     <?php } ?>
                    <?php if(have_rows('featured_brands')) : ?>
                        <div class="featured-brands hidden-s">
                            <h4>Featured Brands</h4>
                            <?php while(have_rows('featured_brands')) : the_row(); $logo = get_sub_field('logo'); ?>
                                <div class="brand"><img src="<?php echo $logo['sizes']['brand-logo']; ?>"/></div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
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
        	<ul id="products" <?php if(get_field('six_across')) { echo 'class="six-across"'; } ?> >
			<?php while(have_posts()) : the_post(); ?>
            	<li>
                	<a href="<?php the_permalink(); ?>">
                    	<div class="img-wrap">
                        	<img src="<?php echo get_acf_image(get_field('product_page_thumbnail'),'product-landing-thumbnail') ?>"  alt="<?php the_title(); ?>" />
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
