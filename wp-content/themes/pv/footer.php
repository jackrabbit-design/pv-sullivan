<footer id="footer">
    	<div class="f-tab-main">
            <div class="f-tab-top">
            	<div class="wrap clearfix">
            		<?php if(have_rows('social_media', 'options')) : ?>
                	<div class="f-social hidden-s pull-right">
                		<?php while(have_rows('social_media', 'options')) : the_row(); ?>
                        	<a href="<?php the_sub_field('link'); ?>" title="<?php echo $icon = get_sub_field('icon'); ?>">
        						<?php if($icon == 'twitter') { ?>
        							<i class="social-twitter"></i>
        						<?php } elseif($icon == 'facebook') { ?>
									<i class="social-youtube"></i>	
        						<?php } ?>
        					</a>
        					<?php endwhile; ?>
                    </div><!--f-social-->
                <?php endif; ?>
                    <ul id="f-tab-btn" class="pull-left">                        
                        <li><a href="#f-tab1" class="active"><img src="ui/images/footer-logo-1.png" width="141" height="84"></a></li>
                        <li><a href="#f-tab2"><img src="ui/images/pv-bath-logo.png" width="141" height="84"></a></li>
                        <li><a href="#f-tab3"><img src="ui/images/pv-express-logo.png" width="141" height="84"></a></li>
                    </ul>
                 </div>
            </div><!--f-tab-top-->
            <div class="wrap f-tab-content-wrap">
            	<div id="f-tab1" class="clearfix f-tab-content">
                	<div class="pull-left">
                    	<nav class="f-left-nav">
                        	<ul>
                            	<li><a href="#">PRODUCTS</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">RESOURCES</a></li>
                                <li><a href="#">LOCATIONS</a></li>
                                <li><a href="#">ABOUT US</a></li>
                            </ul>
                        </nav>
                    </div><!--left-->
                    <div class="pull-right">
                    	<nav class="f-right-nav">
                        	<ul>
                            	<li><a href="#">CAREERS</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#">LOGIN</a></li>
                            </ul>
                        </nav>
                    </div><!--right-->
                </div> <!--tab-->
                
                <div id="f-tab2" class="clearfix f-tab-content">
                	<div class="pull-left">
                    	<nav class="f-left-nav">
                        	<ul>
                            	<li><a href="#">PRODUCTS</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">RESOURCES</a></li>
                            </ul>
                        </nav>
                    </div><!--left-->
                    <div class="pull-right">
                    	<nav class="f-right-nav">
                        	<ul>
                            	<li><a href="#">CAREERS</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#">LOGIN</a></li>
                            </ul>
                        </nav>
                    </div><!--right-->
                </div> <!--tab-->
                
                
                <div id="f-tab3" class="clearfix f-tab-content">
                	<div class="pull-left">
                    	<nav class="f-left-nav">
                        	<ul>
                            	<li><a href="#">PRODUCTS</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">RESOURCES</a></li>
                                <li><a href="#">LOCATIONS</a></li>
                                <li><a href="#">ABOUT US</a></li>
                            </ul>
                        </nav>
                    </div><!--left-->
                    <div class="pull-right">
                    	<nav class="f-right-nav">
                        	<ul>
                            	<li><a href="#">CAREERS</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#">LOGIN</a></li>
                            </ul>
                        </nav>
                    </div><!--right-->
                </div> <!--tab-->
                
                
            </div>
        </div><!--f-tab-main-->
        <?php if(have_rows('social_media')) : ?>
        <div class="f-social visible-s">
        	<?php while(have_rows('social_media', 'options')) : the_row(); ?>
        		<a href="<?php the_sub_field('link'); ?>" title="<?php echo $icon = get_sub_field('icon'); ?>">
        			<?php if($icon == 'twitter') { ?>
        			<i class="social-twitter"></i>
        		<?php } elseif($icon == 'facebook') { ?>
					<i class="social-youtube"></i>	
        		<?php } ?>
        		</a>
        	<?php endwhile; ?>
            <!-- <a href="#" title="Youtube"><i class="social-youtube"></i></a> -->
        </div><!--f-social-->
    <?php endif; ?>
        
        <div class="f-bottom-rwo wrap">
        	<div class="inner-wrap clearfix">
            	<div class="pull-left left-box">
                    &copy; Copyright PV Sullivan Co, Inc.      <a href="#">Terms of Use</a>
                </div>
                
                <div class="pull-right right-box">
                    <span class="jackrabbit"><a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a></span>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>   
</body>
</html>