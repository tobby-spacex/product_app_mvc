<?php

class DVD
{
    public function __construct(){

    }

    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }


    public function validation(){   //$sku, $name, $price, $size_mb

        echo "Pull";
        // if(empty($sku)){
        // $_SESSION['sku_error']='Please insert SKU.';
        // }elseif(iconv_strlen($sku)<5){
        //     $_SESSION['sku_error']='sku must be at least 5 characters.';
        // }

        // if(empty($name)){
        // $_SESSION['name_error']='Please insert name.';
        // }elseif(iconv_strlen($name)<3){
        //     $_SESSION['name_error']='name must be at least 3 characters.';
        // }

        // if(empty($price)){
        //     $_SESSION['price_error']='Please insert price.';
        // }elseif(preg_match( "/[^0-9,.]/", $price)){
        //     $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        // }

        // if(empty($size_mb)){
        //     $_SESSION['mb_error']='*Please insert DVD size.';
        // }elseif(preg_match( "/[^0-9]/", $size_mb)){
        //     $_SESSION['mb_error']='Only integer numbers are allowed.';
        // }

        Product_Validation :: redirectToaddPage();

    }
}