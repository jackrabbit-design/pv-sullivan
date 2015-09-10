<?php

get_header();

?>

<section class="pg-module">
  <div class="wrap pg-content single-pg-content">
      <div class="pg-top clearfix">
            <div class="main-left">
                <h2><?php echo get_multisite_field('404_heading',get_site_id(),'options'); ?></h2>
            </div>
        </div><!--pg-top-->

        <div class="pg-body clearfix">
          <?php if (get_multisite_field('404_subtext',get_site_id(),'options')){ ?>
          <p>
                <?php echo get_multisite_field('404_subtext',get_site_id(),'options'); ?>
            </p>
              <?php } ?>
        </div><!--pg-body-->
    </div>
</section>

<?php get_footer(); ?>