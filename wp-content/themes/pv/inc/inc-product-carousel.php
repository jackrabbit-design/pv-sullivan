
  <?php $slides = 0; if (have_rows('carousel_images')){ ?>
    <section id="product-detail" class="pg-module">
        <ul id="product-carousel">

          <?php while(have_rows('carousel_images')){ the_row(); 
				$imgp = get_sub_field('product_image')
          	?>
            <li>
                <img src="<?php echo $imgp['sizes']['product-thumbnail']; ?>?>" alt="<?php echo $imgp['sizes']['product-thumbnail']; ?>" />
                <h5><?php echo get_sub_field('product_name');?></h5>
                <span><?php echo get_sub_field('product_model_name');?></span>
            </li>
          <?php $slides++; } $slidenum = $slides - 1;?>

        </ul>
    </section>
	<script>
		_productCarousel(<?php echo $slidenum; ?>);
	</script>

  <?php } ?>