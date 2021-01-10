<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/header.php' ?>
<!-- <?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/controllers/product_add.php';?> -->

<div class="container">
<div class="row">
<div class="col-sm">
<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<form id="myForm" name="dvd" method="post" action="product_add/insertData" class="needs-validation" novalidate>
<!-- <form id="myForm" name="dvd" method="post" action="../libraries/test.php" class="needs-validation" novalidate> -->
    <div class="text-right">
    <h3 class="page-header" id="text1"> Product Add</h3>
        <!-- <button type="submit" class="btn btn-primary" id="button1" >Save</button> -->
        <input type="submit" name="submit" class="btn btn-info" value="Submit" />
        <button type="button" class="btn btn-warning" id="button2" onclick="cancelButton();">Cancel </a></button>

    </div>

</div>
<div class="about-border"></div>
</div>

    <div class="form-group">
        <label>SKU</label>
        <input type="text" name="sku" id="sku" placeholder="sku" value="">


        <span class="error">* <?php if(isset($sku_error)){?><?php echo $sku_error;?> <?php }

        if(isset($_SESSION['sku_error'])){
            echo $_SESSION['sku_error'];
            unset($_SESSION['sku_error']);
        }

        ?> </span>


    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="name" value="">
        <span class="error">* <?php

        if(isset($_SESSION['name_error'])){
            echo $_SESSION['name_error'];
            unset($_SESSION['name_error']);
        }

        ?></span>

        <!-- <span class="error">* <?php if(isset($name_error)){?><?php echo $name_error;?> <?php } ?> </span> -->

    </div>


    <div class="form-group">
        <label>Price($)</label>
        <input type="text" name="price" placeholder="123.4" value="">
        <span class="error">* <?php

        echo isset($_SESSION['price_error']) ?  $_SESSION['price_error'] : null;
        unset($_SESSION['price_error']);

        ?> </span>

    </div>


    <div class="option"> <span class="error">*</span>
        <div class="form-group">
        <label for="inputState">Type Switcher</label>
        <select id="inputState" class="form-group" >
            <option selected>Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
    </div>



<div class="boxs">

    <div id="dvd" class="form">
            <label>Size (MB)</label>
            <input type="text" name="size_mb" >
            <br>
            <span class="error"><small>
            <?php
                echo isset($_SESSION['mb_error']) ?  $_SESSION['mb_error'] : null;
                unset($_SESSION['mb_error']);
            ?>

             </span>

            <p class="">"Please, provide size"</p>
    </div>



    <div id="furniture" class="form" >
            <label>Height (CM)</label>
            <input type="text" name="height" >
            <br>
            <span class="error"></span>
            <br>

            <label>Width (CM)</label>
            <input type="text" name="width" >
            <br>
            <span class="error"></span>
            <br>

            <label>Length (CM)</label>
            <input type="text" name="length" >
            <br>
            <span class="error"> </span>
            <br>

            <p class="">"Please,provide dimensions"</p>
    </div>


    <div id="book" class="form">
            <label>Weight (KG)</label>
            <input type="text" name="b_weight">
            <br>
            <span class="error"></span>

            <p class="">"Please, provide weight"</p>
    </div>

</div>

   </form>  <!--</form>-->

</div>  <!-- container -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/footer.php' ?>




<!-- if(isset($_SESSION['message'])){
    if($_SESSION['message'] == 'success'){
        echo "Yeah !";
    }else{
        echo "Problem";
    }
    unset($_SESSION['message']);
}
MESSAGE

    if(mail()){
    $_SESSION['message']='success';
}else{
    $_SESSION['message']='error';
} -->