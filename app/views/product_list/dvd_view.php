<?php
    foreach((array)$data_dvd as $prod){
?>

    <!-- Fetching dvd -->
  <div class="card" style="width: 12rem; height: 12rem;">
      <div class="card-body">
          <label class="checkbox-inline">
          <input  name="box[]" type="checkbox" value="<?php echo $prod["id"];?>">
          </label>
      <br>
      <div class="cardt text-center">
          <p class="card-title"><b><?php echo $prod["dvd_sku"];?></b></p>
          <p class=""><?php echo $prod["dvd_name"]; ?></p>
          <p class=""><?php echo $prod["dvd_price"]; ?>$</p>
          <p>Size: <?php echo $prod["size_mb"]; ?> MB</p>
      </div>
      </div>
  </div>

  <?php
          }
  ?>