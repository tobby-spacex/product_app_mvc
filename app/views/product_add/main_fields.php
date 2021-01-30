
<div class="form-group">
    <label>SKU</label>
    <input type="text" name="sku" id="sku" placeholder="sku" value="<?php echo $_SESSION['sku']; ?>">

    <span class="error">* <small><?php

    echo isset($_SESSION['sku_error']) ?  $_SESSION['sku_error'] : null;
    unset($_SESSION['sku_error']);

    ?></small> </span>
</div>



<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="name" value="<?php echo $_SESSION['name']; ?>">
    <span class="error">* <small><?php

    echo isset($_SESSION['name_error']) ?  $_SESSION['name_error'] : null;
    unset($_SESSION['name_error']);

    ?></small></span>
</div>


<div class="form-group">
    <label>Price($)</label>
    <input type="text" name="price" placeholder="123.4" value="<?php echo $_SESSION['price']; ?>">

    <span class="error">* <small><?php

    echo isset($_SESSION['price_error']) ?  $_SESSION['price_error'] : null;
    unset($_SESSION['price_error']);

    ?> </small></span>
</div>

<small class="error"> <?php
    $warning = "Please select the type of product with the correct specifications";
    $warning = (isset($_SESSION['mb_error']) || isset($_SESSION['boo_error']) || isset($_SESSION['h_error']) || isset($_SESSION['w_error']) || isset($_SESSION['l_error']))
    ?  $warning : null;
    echo "$warning";

     if(isset($_SESSION['type'])){
       if($_SESSION['type'] == 'none'){
            echo "Please select the type of product with the correct specifications";
        }else{
            echo "Problem";
        }
        unset($_SESSION['type']);
    }
?></small>



<div class="option">
        <div class="form-group">
        <label for="inputState">Type Switcher</label> <span class="error">*</span>
        <select name="product"  id="inputState" class="form-group" > <span class="error">TEST</span>
            <option value="none" selected>Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
</div>
