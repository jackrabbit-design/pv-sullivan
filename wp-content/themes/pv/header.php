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
	<?php global $blog_id; if($blog_id == 2) { ?>
	<link type="text/css" rel="stylesheet" href="/ui/css/express.css"/>
	<?php } ?>
</head>


  <?php
    /*
     * Set up variables for landing/not landing
     */
  if (is_primary_landing_page()){
    $body_class = "landing-pg-wrapper";
  }else{
    $body_class = "";
  }
  ?>


<body <?php body_class(); //echo $body_class; ?>>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->



<?php
  if (is_primary_landing_page()){
    get_template_part("inc/inc-nav-landing");
  }else{
    get_template_part("inc/inc-nav-interior");
  }
?>
