<header id="header">
  <div class="header-top">
      <div class="wrap clearfix">
				<?php
          // Top Menu Desktop
          wp_nav_menu(array('theme_location'=>'top-menu', 'menu' => 'Top Menu', 'container' => 'nav', 'container_class'=> 'top-nav pull-right hidden-s', 'container_id'=> '', 'menu_class'=> '', 'menu_id'=>'')); ?>

            <h1 id="logo" class="pull-left">
              <a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
                <img src="<?php $img_arr = get_field('logo', 'options'); echo get_acf_image($img_arr['id'],'logo'); ?>" alt="<?php bloginfo('name'); ?>"/>
              </a>
            </h1>

        </div>
    </div><!--header-top-->

    <div class="main-nav-wrap">
        	<div class="wrap clearfix">

				<?php
				// Main Menu Desktop
				wp_nav_menu(array('theme_location'=>'main-menu', 'menu' => 'Main Menu', 'container' => 'nav', 'container_class'=> 'pull-right', 'container_id'=> 'main-nav', 'menu_class'=> '', 'menu_id'=>'')); ?>

            <?php if (is_primary_landing_page()){ ?>
              <div id="landing-toggle" class="visible-s"><span></span></div>
            <?php }else{ ?>
              <div id="toggle-menu" class="pull-right visible-s"><span></span></div>
            <? } ?>
            </div>
        </div>

    <div id="mobile-nav-wrap">

			<?php
			// Main Menu Mobile
			wp_nav_menu(array('theme_location'=>'main-menu', 'menu' => 'Main Menu', 'container' => 'div', 'container_class'=> 'mob-main-mav', 'container_id'=> '', 'menu_class'=> '', 'menu_id'=>'')); ?>


        <?php
        // Top Menu  Mobile
        wp_nav_menu(array('theme_location'=>'top-menu', 'menu' => 'Top Menu', 'container' => 'div', 'container_class'=> 'mob-sec-nav', 'container_id'=> '', 'menu_class'=> '', 'menu_id'=>'')); ?>

        </div>
  </header>