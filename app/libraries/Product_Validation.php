<?php

session_start();
class Product_Validation
{
    public function nameValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length ){

        if(empty($sku)){
            // $sku_error = 'Please insert SKU.';
            $_SESSION['sku_error']='Please insert SKU.';
        }elseif(iconv_strlen($sku)<5){
            // $sku_error = 'sku must be at least 5 characters.';
            $_SESSION['sku_error']='sku must be at least 5 characters.';
        }

        if(empty($name)){
            // $name_error = 'Please insert name.';
            $_SESSION['name_error']='Please insert name.';
        }elseif(iconv_strlen($name)<3){
            // $name_error = 'name must be at least 3 characters.';
            $_SESSION['name_error']='name must be at least 3 characters.';
        }

        if(empty($price)){
            // $price_error = 'Please insert price.';
            $_SESSION['price_error']='Please insert price.';
        }elseif(preg_match( "/[^0-9,.]/", $price)){
            // $price_error = 'Only integers and rational numbers are allowed.';
            $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        }


        // DVD input validation
        if(empty($size_mb)){
            // $mb_error = '*Please insert DVD size.';
            $_SESSION['mb_error']='*Please insert DVD size.';
        }elseif(preg_match( "/[^0-9]/", $size_mb)){
            // $mb_error = 'Only integer numbers are allowed.';
            $_SESSION['mb_error']='Only integer numbers are allowed.';
        }

        // Book input validation
        if(empty($book_weight)){
            // $boo_error = '*Please insert Book size.';
            $_SESSION['boo_error']='*Please insert Book size.';
        }elseif(preg_match( "/[^0-9,.]/", $book_weight)){
            // $boo_error = 'Only integers and rational numbers are allowed.';
            $_SESSION['boo_error']='Only integers and rational numbers are allowed.';
        }


        // Furniture input validation

        if(empty($height) && empty($width) && empty($length)){
            // $h_error = '*Please insert Furniture height.';
            // $w_error = '*Please insert Furniture width.';
            // $l_error = '*Please insert Furniture lenght.';
            $_SESSION['h_error']='*Please insert Furniture height.';
            $_SESSION['w_error']='*Please insert Furniture width.';
            $_SESSION['l_error']='*Please insert Furniture lenght.';
        }elseif(preg_match( "/[^0-9,.]/", $height)){
            // $h_error = 'Only integers and rational numbers are allowed.';
            $_SESSION['h_error']='Only integers and rational numbers are allowed.';
        }elseif(preg_match( "/[^0-9,.]/", $width)){
            // $w_error = 'Only integers and rational numbers are allowed.';
            $_SESSION['w_error']='Only integers and rational numbers are allowed.';
        }elseif(preg_match( "/[^0-9,.]/", $length)){
            // $l_error = 'Only integers and rational numbers are allowed.';
            $_SESSION['l_error']='Only integers and rational numbers are allowed.';
        }


        header("Location: http://product-app/product_add");


    }
}