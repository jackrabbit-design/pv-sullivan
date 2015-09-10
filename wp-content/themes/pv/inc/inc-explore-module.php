<section id="service" class="module-inner-padding top-shadow gray-bg">
  <div class="wrap">
      <h4><?php echo get_sub_field("explore_module_line_1"); ?></h4>
        <h2><?php echo get_sub_field("explore_module_line_2"); ?></h2>
        <p><?php echo get_sub_field("explore_module_line_3"); ?></p>

        <?php if (have_rows('explore_module_links')){ ?>
        <ul id="service-circle">
        <?php while (have_rows('explore_module_links')){ the_row(); ?>
          <li>
              <a href="<?php echo get_sub_field('link_url') ?>">
                  <div class="inner-wrapper">
                        <div class="img-bg" style="background-image:url(<?php echo get_acf_image(get_sub_field('image'),'sullivan-site-ad');?>)">
                            <div class="text-box">
                                <h3><?php echo get_sub_field('title'); ?></h3>
                                <span><?php echo get_sub_field('subtext'); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        <?php } ?>
        </ul>
        <?php } ?>
    </div>
</section><!--service-->