
<div class="form-group">
    <label>SKU</label>
    <input type="text" name="sku" id="sku" placeholder="sku" value="<?php echo $_SESSION['sku']; ?>">

    <span class="error">* <?php

    echo isset($_SESSION['sku_error']) ?  $_SESSION['sku_error'] : null;
    unset($_SESSION['sku_error']);

    ?> </span>
</div>

<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="name" value="<?php echo $_SESSION['name']; ?>">
    <span class="error">* <?php

    echo isset($_SESSION['name_error']) ?  $_SESSION['name_error'] : null;
    unset($_SESSION['name_error']);

    ?></span>
</div>


<div class="form-group">
    <label>Price($)</label>
    <input type="text" name="price" placeholder="123.4" value="<?php echo $_SESSION['price']; ?>">

    <span class="error">* <?php

    echo isset($_SESSION['price_error']) ?  $_SESSION['price_error'] : null;
    unset($_SESSION['price_error']);

    ?> </span>
</div>

<div class="option">
        <div class="form-group">
        <label for="inputState">Type Switcher</label> <span class="error">*</span>
        <select id="inputState" class="form-group" >
            <option selected>Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
</div>