<section id="pg-full-content">
  <div class="wrap clearfix">
      <div class="box-one pull-left">
          <h3><?php echo get_sub_field('headline'); ?></h3>
            <p><?php echo get_sub_field('subtext'); ?></p>
        </div>
        <div class="pull-right box-two">
          <div class="icon-bg-btn"<?php if (get_sub_field('icon')){ ?> style="background-image:url(<?php echo get_acf_image(get_sub_field('icon'),'call-to-action-banner-icon')?>"<?php } ?>>
              <a href="<?php echo get_sub_field('url'); ?>" class="btn green-btn"><?php echo get_sub_field('button_label'); ?></a>
            </div>
        </div>
    </div>
</section>