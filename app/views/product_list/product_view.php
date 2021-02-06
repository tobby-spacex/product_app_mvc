<?php
    // $dvds = array_filter($data_dvd, function ($item) {
    //     return $item['origin'] === 'dvd';
    // });

    foreach((array)$product_data as $prod){
?>

<!-- Product Fetching  -->
  <div class="card" style="width: 12rem; height: 12rem;">
      <div class="card-body">
          <label class="checkbox-inline">
          <input  name="box[]" type="checkbox" value="<?php echo $prod["id"];?>">
          </label>
      <br>
      <div class="cardt text-center">

          <p class="card-title"><b><?php echo strtoupper($prod["sku"]);?></b></p>
          <p class=""><?php echo $prod["name"]; ?></p>
          <p class=""><?php echo $prod["price"]; ?>$</p>

          <?php if ($prod["origin"] == "dvd"): ?>
          <p>Size: <?php echo $prod["size"]; ?> MB </p>

          <?php elseif ($prod["origin"] == "book"): ?>
          <p>Size: <?php echo $prod["size"]; ?> Weight </p>

          <?php elseif ($prod["origin"] == "furniture"): ?>
          <p>Dimension:<br><small> <?php echo $prod["size"]; ?> x <?php echo $prod["f_width"]; ?> x <?php echo $prod["f_length"]; ?></small></p>

          <?php else: ?>
          <p>unknown type of pruduct</p>
          <?php endif; ?>

      </div>
      </div>
  </div>

  <?php
          }
  ?>




