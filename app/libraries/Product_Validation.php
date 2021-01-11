<?php

session_start();
class Product_Validation
{
    public function productValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length ){

        // if(empty($sku)){
        //     // $sku_error = 'Please insert SKU.';
        //     $_SESSION['sku_error']='Please insert SKU.';
        // }elseif(iconv_strlen($sku)<5){
        //     // $sku_error = 'sku must be at least 5 characters.';
        //     $_SESSION['sku_error']='sku must be at least 5 characters.';
        // }

        $skuVal = (empty($sku)) ? $_SESSION['sku_error']='Please insert SKU.'
        : ((iconv_strlen($sku)<5) ?  $_SESSION['sku_error']='sku must be at least 5 characters.' : die);

        // if(empty($name)){
        //     // $name_error = 'Please insert name.';
        //     $_SESSION['name_error']='Please insert name.';
        // }elseif(iconv_strlen($name)<3){
        //     // $name_error = 'name must be at least 3 characters.';
        //     $_SESSION['name_error']='name must be at least 3 characters.';
        // }

        $nameVal = (empty($name)) ? $_SESSION['name_error']='Please insert name.'
        : ((iconv_strlen($name)<3) ?  $_SESSION['name_error']='name must be at least 3 characters.' : die);


        // if(empty($price)){
        //     // $price_error = 'Please insert price.';
        //     $_SESSION['price_error']='Please insert price.';
        // }elseif(preg_match( "/[^0-9,.]/", $price)){
        //     // $price_error = 'Only integers and rational numbers are allowed.';
        //     $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        // }

        $priceVal = (empty($price)) ? $_SESSION['price_error']='Please insert price.'
        : ((preg_match( "/[^0-9,.]/", $price)) ? $_SESSION['price_error']='Only integers and rational numbers are allowed.' : die);


        // // DVD input validation
        // if(empty($size_mb)){
        //     // $mb_error = '*Please insert DVD size.';
        //     $_SESSION['mb_error']='*Please insert DVD size.';
        // }elseif(preg_match( "/[^0-9]/", $size_mb)){
        //     // $mb_error = 'Only integer numbers are allowed.';
        //     $_SESSION['mb_error']='Only integer numbers are allowed.';
        // }

        $sizeVal = (empty($size_mb)) ?  $_SESSION['mb_error']='Please insert DVD size.'
        : ((preg_match( "/[^0-9,.]/", $size_mb)) ? $_SESSION['mb_error']='Only integer numbers are allowed.' : die);




        // // Book input validation
        // if(empty($book_weight)){
        //     // $boo_error = '*Please insert Book size.';
        //     $_SESSION['boo_error']='*Please insert Book size.';
        // }elseif(preg_match( "/[^0-9,.]/", $book_weight)){
        //     // $boo_error = 'Only integers and rational numbers are allowed.';
        //     $_SESSION['boo_error']='Only integers and rational numbers are allowed.';
        // }


        $weightVal = (empty($book_weight)) ?  $_SESSION['boo_error']='Please insert Book size.'
        : ((preg_match( "/[^0-9,.]/", $book_weight)) ? $_SESSION['boo_error']='Only integers and rational numbers are allowed.' : die);


        // Furniture input validation

        // if(empty($height) && empty($width) && empty($length)){
        //     // $h_error = '*Please insert Furniture height.';
        //     // $w_error = '*Please insert Furniture width.';
        //     // $l_error = '*Please insert Furniture lenght.';
        //     $_SESSION['h_error']='*Please insert Furniture height.';
        //     $_SESSION['w_error']='*Please insert Furniture width.';
        //     $_SESSION['l_error']='*Please insert Furniture lenght.';
        // }elseif(preg_match( "/[^0-9,.]/", $height)){
        //     // $h_error = 'Only integers and rational numbers are allowed.';
        //     $_SESSION['h_error']='Only integers and rational numbers are allowed.';
        // }elseif(preg_match( "/[^0-9,.]/", $width)){
        //     // $w_error = 'Only integers and rational numbers are allowed.';
        //     $_SESSION['w_error']='Only integers and rational numbers are allowed.';
        // }elseif(preg_match( "/[^0-9,.]/", $length)){
        //     // $l_error = 'Only integers and rational numbers are allowed.';
        //     $_SESSION['l_error']='Only integers and rational numbers are allowed.';
        // }

        $furVal1 = (empty($height)) ? $_SESSION['h_error']='*Please insert Furniture height.'
        : ((preg_match( "/[^0-9,.]/", $height)) ? $_SESSION['h_error']='Only integers and rational numbers are allowed.': die);


        $furVal2 = (empty($width)) ? $_SESSION['w_error']='*Please insert Furniture width.'
        : ((preg_match( "/[^0-9,.]/", $width)) ? $_SESSION['w_error']='Only integers and rational numbers are allowed.': die);

        $furVal3 = (empty($length)) ? $_SESSION['l_error']='*Please insert Furniture lenght.'
        : ((preg_match( "/[^0-9,.]/", $length)) ? $_SESSION['w_error']='Only integers and rational numbers are allowed.': die);










        header("Location: http://product-app/product_add");


    }
}