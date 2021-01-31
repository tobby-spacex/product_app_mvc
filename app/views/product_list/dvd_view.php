<?php
    foreach((array)$data_dvd as $prod){
?>


  <div class="card" style="width: 12rem; height: 12rem;">
      <div class="card-body">
          <label class="checkbox-inline">
          <input  name="box[]" type="checkbox" value="<?php echo $prod["id"];?>">
          </label>
      <br>
      <div class="cardt text-center">
          <p class="card-title"><b><?php echo $prod["book_sku"];?></b></p>
          <p class=""><?php echo $prod["book_name"]; ?></p>
          <p class=""><?php echo $prod["book_price"]; ?>$</p>
          <p>Size: <?php echo $prod["b_weight"]; ?> MB</p>
      </div>
      </div>
  </div>

  <?php
          }
  ?>

<!-- <?php
    foreach((array)$data_dvd as $prod){
?>


  <div class="card" style="width: 12rem; height: 12rem;">
      <div class="card-body">
          <label class="checkbox-inline">
          <input  name="box[]" type="checkbox" value="<?php echo $prod["id"];?>">
          </label>
      <br>
      <div class="cardt text-center">
          <p class="card-title"><b><?php echo $prod["book_sku"];?></b></p>
          <p class=""><?php echo $prod["book_name"]; ?></p>
          <p class=""><?php echo $prod["book_price"]; ?>$</p>
          <p>Size: <?php echo $prod["b_weight"]; ?> MB</p>
          <p>Dimension:<br><small> <?php echo $prod["f_height"]; ?> x <?php echo $prod["f_width"]; ?> x <?php echo $prod["f_length"]; ?></small></p>

      </div>
      </div>
  </div>

  <?php
          }
  ?> -->



