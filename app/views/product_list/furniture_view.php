    <!-- Fetching furniture -->
    <?php
         foreach((array) $data_furniture as $furniture){
    ?>

    <div class="card" style="width: 12rem; height: 12rem;">
    <div class="card-body">
        <label class="checkbox-inline">
            <input type="checkbox" name= "box[]" value="<?php echo $furniture["id"];?>">
        </label>
    <br>
    <div class="cardt text-center">
          <p class="card-title"><b><?php echo $furniture["f_sku"];?></b></p>
          <p class=""><?php echo $furniture["f_name"]; ?></p>
          <p class=""><?php echo $furniture["f_price"]; ?>$</p>
          <p>Dimension:<br><small> <?php echo $furniture["f_height"]; ?> x <?php echo $furniture["f_width"]; ?> x <?php echo $furniture["f_length"]; ?></small></p>
        </div>
      </div>
    </div>

    <?php
          }
    ?>