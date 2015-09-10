<?php

/*
 * Template Name: PV Bathworks Landing
 */

get_header();
?>

<?php if (have_rows('slides')){ ?>
<section id="pg-slider-wrap" class="top-shadow">
  <ul id="pg-slider2" class="bathworks-slider">
    <?php while (have_rows('slides')){ the_row(); ?>
      <li>
        <?php
         // use image ALT if provided; otherwise use the title
        $image_alt = get_acf_image_alt(get_sub_field('image'));
        $alt = empty($image_alt) ? get_sub_field('title') : $image_alt;
        ?>
        <img src="<?php echo get_acf_image(get_sub_field('image'),'bathworks-home-banner')?>" width="1400" height="700" alt="<?php echo htmlentities($alt)?>" />
          <div class="text-box-wrapper">
              <div class="text-box">
                  <h3><?php echo get_sub_field('title')?></h3>
                  <p><?php echo get_sub_field('subtext')?></p>
                  <a href="<?php echo get_sub_field('call_to_action_url')?>" class="btn btn-green-outline"><?php echo get_sub_field('call_to_action_label')?></a>
              </div>
          </div>
      </li>
    <?php } ?>
  </ul>
</section>
<?php } ?>


<?php
/*
 * Flexible content modules
 */
get_template_part("inc/inc-flex-content");
?>


<?php get_footer(); ?>