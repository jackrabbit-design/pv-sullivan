<div class="banner-bottom-txt wrap">
    <h4><?php echo get_sub_field('logo_scroll_heading') ?></h4>
</div>

<?php if (have_rows('logos')){ ?>
<section id="hm-logo-wrapper">
    <div class="wrap-larg">
      <ul id="hm-logo-carousel">
        <?php while(have_rows('logos')){ the_row(); ?>
            <li>
                <a href="javascript://"><img src="<?php echo get_acf_image(get_sub_field('logo'),'manufacturer-logo')?>" alt="<?php echo get_sub_field('name')?>" /></a>
            </li>
        <?php } ?>
        </ul>
    </div>
</section>
<?php } ?>