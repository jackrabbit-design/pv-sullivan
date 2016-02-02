<?php $img = get_field('top_logo'); $imgLogo = get_field('top_logo_mobile'); ?>

<header id="landing-header">
    <a class="pull-left logo-mobile" href=""><img src="<?php echo $imgLogo['url']; ?>"/></a>
    <div class="wrap clearfix landing-top-menu">
      <a class="pull-left logo-desktop" href=""><img src="<?php echo $img['url']; ?>"/></a>
      <nav class="pull-right">
        <?php
        wp_nav_menu(array(
            'theme_location'=>'top-menu',
            'menu' => 'Top Menu',
            'container' => '',
            'container_class'=> '',
            'container_id'=> '',
            'menu_class'=> '',
            'menu_id'=>''));
        ?>

        </nav>
    </div>

    <div id="landing-toggle" class="visible-s"><span></span></div>
</header>
