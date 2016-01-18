<script type="text/javascript">
var map_locations = [];
</script>

<?php if (have_rows('locations')){ ?>
<section id="locations-wrapper" class="pg-content pg-module">
  <div class="wrap">
    <?php $i = 0; ?>
    <?php while (have_rows('locations')){ the_row(); ?>
    <?php
      // Determine whether user provided lat/lng for this location. If not, attempt to geocode
      $lat = get_sub_field("latitude");
      $lng = get_sub_field("longitude");

      if (empty($lat) || empty($lng)){
        // Geocode
        $safe_address = str_replace("\n","",json_encode(strip_tags(get_sub_field('address'))));
        $address_info = geocode_address($safe_address);

        if (!empty($address_info)){
          $lat = $address_info['latitude'];
          $lng = $address_info['longitude'];
          // update DB so we don't need to geocode on every page refresh
          update_sub_field('latitude',$lat);
          update_sub_field('longitude',$lng);
        }else{
          $geocode_error = true;
        }
      }
    ?>
      <div class="loc-box-wrapper">
            <h4><?php echo get_sub_field('title'); ?></h4>
            <?php if (@$geocode_error){ ?>
            <strong>Could not create map. Admin, please check the address in the system.</strong>
            <?php }else{ ?>
              <div class="map-wrapper" id="map<?php echo $i; ?>">

              </div>
            <?php } ?>

            <ul class="loc-detail">
                <li>
                    <h5>Address</h5>
                    <p><?php echo get_sub_field('address'); ?></p>
                </li>
                <?php if (get_sub_field('hours')){ ?>
                <li>
                    <h5>Hours</h5>
                    <?php echo get_sub_field('hours'); ?>
                </li>
                <?php } ?>
                <li>
                    <?php if (get_sub_field('phone')){ ?>
                    <h5>Phone</h5>
                    <p><?php echo get_sub_field('phone'); ?></p>
                    <?php } ?>
                    <?php if (get_sub_field('fax')){ ?>
                    <h5>Fax</h5>
                    <p><?php echo get_sub_field('fax'); ?></p>
                    <?php } ?>
                </li>
                <?php if (get_sub_field('email')){ ?>
                <li>
                    <h5>Email</h5>
                    <p><a href="<?php echo get_sub_field("email")?>"><?php echo get_sub_field("email")?></a></p>
                </li>
                <?php } ?>
            </ul>
        </div><!--loc-box-wrapper-->
        <?php if (empty($geocode_error)){ ?>
      <script type="text/javascript">
        var loc = {
            map_id:<?php echo $i; ?>,
            latitude:"<?php echo $lat?>",
            longitude:"<?php echo $lng ?>"
        };
        map_locations.push(loc);
      </script>
        <?php } ?>
      <?php $i++; ?>
    <?php } ?>
    </div>
</section>

<?php } ?>
