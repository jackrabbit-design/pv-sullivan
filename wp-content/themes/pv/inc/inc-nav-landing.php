<header id="landing-header">
  <div class="wrap clearfix landing-top-menu">
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