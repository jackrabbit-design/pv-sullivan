<section class="pg-module">
  <div class="wrap pg-content single-pg-content">
      <div class="pg-top clearfix">
            <div class="pull-left main-left">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="pull-right main-right">
              <?php if (get_field('headline')){ ?>
                <h3><?php echo get_field('headline'); ?></h3>
              <?php } ?>
            </div>
        </div><!--pg-top-->

        <div class="pg-body clearfix">
            <div class="pull-left main-left">
            <?php if (get_field('left_sidebar_image')){ ?>
              <img src="<?php echo get_acf_image('left_sidebar_image','interior-left-sidebar')?>" alt="" width="555" height="396" />
            <?php } ?>
            </div>

            <div class="pull-right main-right">
              <?php the_content(); ?>
            </div>

          </div><!--pg-body-->
    </div>
</section>