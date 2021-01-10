<?php

session_start();

$sku = filter_input(INPUT_POST, 'sku');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$size_mb = filter_input(INPUT_POST, 'size_mb');

$book_weight = filter_input(INPUT_POST, 'b_weight');

$height = filter_input(INPUT_POST, 'height');
$width = filter_input(INPUT_POST, 'width');
$length = filter_input(INPUT_POST, 'length');


if(isset($_POST["submit"])){
    if(empty($sku)){
        // $sku_error = 'Please insert SKU.';
        $_SESSION['message']='success';

    }elseif(iconv_strlen($sku)<5){
        $sku_error = 'sku must be at least 5 characters.';
    }

    if(empty($name)){
        $name_error = 'Please insert name.';
    }elseif(iconv_strlen($name)<3){
        $name_error = 'name must be at least 3 characters.';
    }

    if(empty($price)){
        $price_error = 'Please insert price.';
    }elseif(preg_match( "/[^0-9,.]/", $price)){
        $price_error = 'Only integers and rational numbers are allowed.';
    }
    // require '../views/product_add/index.php';

    // header("Location: http://product-app/product_add");
    exit;
    // die("<script>location.href = 'http://product-app/product_add'</script>");


}












    // include_once 'Controller.php';
    // // include_once 'controllers/product_add.php';
    // require_once $_SERVER['DOCUMENT_ROOT'] .'/app/controllers/product_add.php';
    // $product_add = new Product_add();


// require_once $_SERVER['DOCUMENT_ROOT'] .'/app/controllers/product_add.php';
// $product_add = new Product_add();