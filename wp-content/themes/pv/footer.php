<?php
/*************************************
 * FOOTER FOR MAIN LANDING PAGE
 /************************************/

if (is_primary_landing_page()){
?>

    <footer id="landing-footer">
    	<div class="wrap clearfix">
        	<? get_template_part("inc/inc-footer-links"); ?>
        </div>
    </footer>


<?php

}else{


/*************************************
 * FOOTER FOR ALL OTHER PAGES
 /************************************/
?>

<footer id="footer">
    	<div class="f-tab-main">
            <div class="f-tab-top">
            	<div class="wrap clearfix">
                    <?php
                      $social_media_links = get_multisite_field('social_media',null,'options');
                      if (!empty($social_media_links)){ ?>
                    	<div class="f-social hidden-s pull-right">
                        <?php foreach($social_media_links as $link){
                          if (in_array(get_current_blog_id(),$link['sites'])){
                          ?>
                            <a target="_blank" href="<?php echo $link['link'] ?>" title="<?php echo $icon = $link['icon']; ?>">
                              <?php if($icon == 'twitter') { ?>
                              <i class="social-twitter"></i>
                            <?php } elseif($icon == 'facebook') { ?>
                            <i class="social-facebook"></i>
                            <?php } elseif($icon == 'houzz') { ?>
                            <i class="icon-houzz"></i>
                        
                            <?php } elseif($icon == 'pinterest') { ?>
                            <i class="social-pinterest"></i>
                            <?php } ?>
                            </a>
                      <?php
                          }
                        }
                      ?>
                      </div><!--f-social-->
                      <?php
                      }
                      ?>
                    <ul id="f-tab-btn" class="pull-left">
                        <li><a href="#f-tab1" data-url="<?php if(get_current_blog_id()==1) { bloginfo('url'); } ?>" class="<?php echo get_current_blog_id()==1?"active current":""?>"><img src="<?php bloginfo('url'); ?>/ui/images/footer-logo-1.png" width="141" height="84" alt="<?php echo get_multisite_bloginfo(get_site_id('sullivan'),'name')?>"></a></li>
                        <li><a href="#f-tab3" data-url="<?php if(get_current_blog_id()==3) { bloginfo('url'); } ?>" class="<?php echo get_current_blog_id()==3?"active current":""?>"><img src="<?php bloginfo('url'); ?>/ui/images/pv-bath-logo.png" width="141" height="84" alt="<?php echo get_multisite_bloginfo(get_site_id('bathworks'),'name')?>"></a></li>
                        <li><a href="#f-tab2" data-url="<?php if(get_current_blog_id()==2) { bloginfo('url'); } ?>" class="<?php echo get_current_blog_id()==2?"active current":""?>"><img src="<?php bloginfo('url'); ?>/ui/images/pv-express-logo.png" width="141" height="84" alt="<?php echo get_multisite_bloginfo(get_site_id('express'),'name')?>"></a></li>
                    </ul>
                 </div>
            </div><!--f-tab-top-->
            <div class="wrap f-tab-content-wrap">
              <?php
               $blog_ids = array(1,3,2);
               foreach($blog_ids as $id){
              ?>
              <div id="f-tab<?php echo $id?>" class="clearfix f-tab-content">
                	<div class="pull-left">
                    	<nav class="f-left-nav">
                          <?php
                          // Left Footer Menu
                          $menu_html = wp_multisite_nav_menu(array(
                              'theme_location'=>'left-footer-menu',
                              'container_class'=> '',
                              'container_id'=> '',
                              'menu_class'=> '',
                              'menu_id'=>'',
                              'echo'=>0),
                              $id);
                          // add 'Home' link to menu
/*
                          $home_link = "<li><a href='".get_site_url($id)."'>HOME</a></li>";
                          $pos = strpos($menu_html,"<li ");
                          $menu_html = substr_replace($menu_html,$home_link,$pos,0);
*/
                          echo $menu_html;
                          ?>
                        </nav>
                    </div><!--left-->
                    <div class="pull-right">
                    	<nav class="f-right-nav">
                        	<?php
                          // Left Footer Menu
                          wp_multisite_nav_menu(array(
                              'theme_location'=>'right-footer-menu',
                              'container_class'=> '',
                              'container_id'=> '',
                              'menu_class'=> '',
                              'menu_id'=>''),
                              $id); ?>
                        </nav>
                    </div><!--right-->
                </div> <!--tab-->
                <?php } ?>
            </div>
        </div><!--f-tab-main-->
          <?php
          $social_media_links = get_multisite_field('social_media',null,'options');
          if (!empty($social_media_links)){
            ?>
          <div class="f-social visible-s">
            <?php
            foreach($social_media_links as $link){
              if (in_array(get_current_blog_id(),$link['sites'])){
              ?>
                <a target="_blank" href="<?php echo $link['link'] ?>" title="<?php echo $icon = $link['icon']; ?>">
                  <?php if($icon == 'twitter') { ?>
                  <i class="social-twitter"></i>
                <?php } elseif($icon == 'facebook') { ?>
                <i class="social-facebook"></i>
                  <?php } ?>
                  </a>
          <?php
              }
            }
            ?>
            </div><!--f-social-->
            <?php
          }
          ?>

        <div class="f-bottom-rwo wrap">
        	<div class="inner-wrap clearfix">
            	<? get_template_part("inc/inc-footer-links"); ?>
            </div>
        </div>
    </footer>


<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
