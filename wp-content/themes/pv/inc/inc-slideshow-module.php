<?php if (have_rows('images')){ ?>
<section id="pg-slider-wrap">
  <ul id= "pg-slider">
    <?php while(have_rows('images')){ the_row(); ?>
      <li>
        <img src="<?php echo get_acf_image(get_sub_field('image'),'slideshow-module')?>" width="1400" height="700" alt="<?php echo get_acf_image_alt(get_sub_field('image'))?>" />
      </li>
    <?php } ?>
  </ul>
</section>
<?php } ?>