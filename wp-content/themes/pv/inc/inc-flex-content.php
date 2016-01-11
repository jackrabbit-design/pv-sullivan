<?php

/*
 * Loads various types of flexible content
 */
    if (have_rows('flex_content')){
      while (have_rows('flex_content')){ the_row();
        switch(get_row_layout()){
          case "logo_scroll":
            get_template_part("inc/inc-logo-scroll");
            break;
          case "explore_module":
            get_template_part("inc/inc-explore-module");
            break;
          case "featured_content":
            get_template_part("inc/inc-featured-content");
            break;
          case "call_to_action_banner":
            get_template_part("inc/inc-cta-banner");
            break;
          case "two_column_module":
            get_template_part("inc/inc-two-column-module");
            break;
          case "slideshow_module":
            get_template_part("inc/inc-slideshow-module");
            break;
          case "carousel";
          	get_template_part('inc/inc-product-carousel');
          	break;
        }
      }
    }
?>



