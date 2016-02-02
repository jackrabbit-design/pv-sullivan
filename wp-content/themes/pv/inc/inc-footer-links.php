<div class="pull-left left-box">
    &copy; <?php echo date('Y'); ?> <?php echo get_multisite_field('copyright',null,'options')?>
    <?php
    $links = get_multisite_field('footer_links',null,'options');
    if (!empty($links)){
      foreach($links as $link){
        ?>
    <a href="<?php echo $link['url']?>"><?php echo $link['label']?></a>
    <?php
      }
    }
    ?>
</div>

<div class="pull-right right-box">
    <span class="jackrabbit"><a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a></span>
</div>
