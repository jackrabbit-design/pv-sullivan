<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
<!-- 
                                    +        
                                  ++++       
                                 ++++++      
                                ++++++++     
                               ++++++++++    
                              ++++++++++++   
                              ++++++++++++,  
                             ++++++++++++++  
                             ++++++++++++++, 
                            ,+++++++++++++++ 
            +??????????????333++++++++++++++ 
        +++++++++++++I3333333333++++++++++++ 
      ++++++++++++733333333333333+++++++++++ 
     +++++++++++333333333333333333++++++++++ 
     +++++++++   333333333333333333+++++++++ 
     ++++++++     33333333333333333+++++++++ 
     ++++++        33333333333333333+++++++  
     +++++          3333333333333333+++++++  
     ++++             33333333333333++++++   
     +++                3333333333333++++    
      ++                  33333333333+++     
                            333333337++      
                               33333++       
                                  33+        

-->
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title><?php wp_title(); ?></title>

    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->
	<header id="header">
    	<div class="header-top">
        	<div class="wrap clearfix">
				
				<?php 
				// Top Menu Desktop
				wp_nav_menu(array('theme_location'=>'top-menu', 'menu' => 'Top Menu', 'container' => 'nav', 'container_class'=> 'top-nav pull-right hidden-s', 'container_id'=> '', 'menu_class'=> '', 'menu_id'=>'')); ?>

                <h1 id="logo" class="pull-left">
                	<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
                    	<img src="<?php $logo = get_field('logo', 'options'); echo $logo['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>"/>
                    </a>
                </h1>
            </div>
        </div><!--header-top-->
        
        <div class="main-nav-wrap">
        	<div class="wrap clearfix">
				
				<?php
				// Main Menu Desktop
				wp_nav_menu(array('theme_location'=>'main-menu', 'menu' => 'Main Menu', 'container' => 'nav', 'container_class'=> 'pull-right', 'container_id'=> 'main-nav', 'menu_class'=> '', 'menu_id'=>'')); ?>
                
                <div id="toggle-menu" class="pull-right visible-s"><span></span></div>
            </div>
        </div>
        
        <div id="mobile-nav-wrap">
			
			<?php 
			// Main Menu Mobile
			wp_nav_menu(array('theme_location'=>'main-menu', 'menu' => 'Main Menu', 'container' => 'div', 'container_class'=> 'mob-main-mav', 'container_id'=> 'main-nav', 'menu_class'=> '', 'menu_id'=>'')); ?>


            <?php 
            // Top Menu  Mobile
            wp_nav_menu(array('theme_location'=>'top-menu', 'menu' => 'Top Menu', 'container' => 'div', 'container_class'=> 'mob-sec-nav', 'container_id'=> '', 'menu_class'=> '', 'menu_id'=>'')); ?>
            
        </div>
    </header>