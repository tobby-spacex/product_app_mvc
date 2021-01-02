<!-- Fetching book -->
<?php
     foreach( (array)$data_book as $book){
  ?>

    <div class="card" style="width: 12rem; height: 12rem;">
    <div class="card-body">
        <label class="checkbox-inline">
            <input type="checkbox" name= "box[]" value="<?php echo $book["id"];?>">
        </label>
    <br>
    <div class="cardt text-center">
        <p class="card-title"><b><?php echo $book["book_sku"];?></b></p>
        <p class=""><?php echo $book["book_name"]; ?></p>
        <p class=""><?php echo $book["book_price"]; ?>$</p>
        <p>Size: <?php echo $book["b_weight"]; ?> Weight </p>
    </div>
      </div>
    </div>

  <?php
        }
  ?>
