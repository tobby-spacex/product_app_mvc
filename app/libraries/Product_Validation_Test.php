<?php

// this class is not used anywhere, it was used for testing and left as a template.
session_start();
class Product_Validation_Test
{
    public function productValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length ){

        if(empty($sku)){
            $_SESSION['sku_error']='Please insert SKU.';
        }elseif(iconv_strlen($sku)<5){
            $_SESSION['sku_error']='sku must be at least 5 characters.';
        }

        if(empty($name)){
            $_SESSION['name_error']='Please insert name.';
        }elseif(iconv_strlen($name)<3){
            $_SESSION['name_error']='name must be at least 3 characters.';
        }

        if(empty($price)){
            $_SESSION['price_error']='Please insert price.';
        }elseif(preg_match( "/[^0-9,.]/", $price)){
            $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        }


        // DVD input validation
        if(empty($size_mb)){
            $_SESSION['mb_error']='*Please insert DVD size.';
        }elseif(preg_match( "/[^0-9]/", $size_mb)){
            $_SESSION['mb_error']='Only integer numbers are allowed.';
        }

        // Book input validation
        if(empty($book_weight)){
            $_SESSION['boo_error']='*Please insert Book size.';
        }elseif(preg_match( "/[^0-9,.]/", $book_weight)){
            $_SESSION['boo_error']='Only integers and rational numbers are allowed.';
        }


        // Furniture input validation

        if(empty($height) && empty($width) && empty($length)){
            $_SESSION['h_error']='*Please insert Furniture height.';
            $_SESSION['w_error']='*Please insert Furniture width.';
            $_SESSION['l_error']='*Please insert Furniture lenght.';
        }elseif(preg_match( "/[^0-9,.]/", $height)){
            $_SESSION['h_error']='Only integers and rational numbers are allowed.';
        }elseif(preg_match( "/[^0-9,.]/", $width)){
            $_SESSION['w_error']='Only integers and rational numbers are allowed.';
        }elseif(preg_match( "/[^0-9,.]/", $length)){
            $_SESSION['l_error']='Only integers and rational numbers are allowed.';
        }


        header("Location: http://product-app/product_add");


    }
}