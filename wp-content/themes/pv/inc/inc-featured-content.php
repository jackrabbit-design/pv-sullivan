<?php
global $blog_id; $basImg = get_field('featured_content_background', 'options');
if (have_rows('slides')){ ?>

<section id="training-wrapper" <?php //if($blog_id == 2) { echo 'style="background-image: url('.$basImg['url'].'); background-size: cover;"'; } ?>>
  <div class="wrap-larg">
      <div class="bg-wrapper hidden-s"><div class="inner-wrap"><div class="circle-bg"></div></div></div>

      <ul id="training">
        <?php while (have_rows('slides')){ the_row(); ?>
          <li>
              <div class="clearfix main-wrap">
                  <div class="pull-right box-one">
                    <?php
                      // use image ALT if provided; otherwise use the title
                     $image_alt = get_acf_image_alt(get_sub_field('image'));
                     $alt = empty($image_alt) ? get_sub_field('title') : $image_alt;
                     ?>
                      <img src="<?php echo get_acf_image(get_sub_field('image'),'featured-content-thumb'); ?>"  alt="<?php echo htmlentities($alt) ?>" />
                    </div><!--right-->
                    <div class="pull-left box-two">
                      <h3><?php echo get_sub_field('category') ?></h3>
                        <h2><a href="<?php echo get_sub_field('call_to_action_url')?>"><?php echo get_sub_field('title') ?></a></h2>
                        <?php echo get_sub_field('text_content'); ?>
                        <a href="<?php echo get_sub_field('call_to_action_url')?>" class="btn green-btn"><?php echo get_sub_field('call_to_action_label')?></a>
                    </div><!--left-->
                </div>
            </li>
        <?php } ?>
        </ul>
    </div>
</section>
<?php } ?>