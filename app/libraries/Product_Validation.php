<?php

// In this class, input data is validated. Created three methods that send verified data to the database.
// Above ternary expressions were created and commented out conditional statements, this was done to make it easier
// for the reader of the code to understand what the code is doing.

session_start();
class Product_Validation
{
    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }

    public static function  redirectToMainPage(){
        header("Location: http://product-app/");
    }


    public function productValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length ){

        // if(empty($sku)){
        //     $_SESSION['sku_error']='Please insert SKU.';
        // }elseif(iconv_strlen($sku)<5){
        //     $_SESSION['sku_error']='sku must be at least 5 characters.';
        // }

        $skuVal = (empty($sku)) ? $_SESSION['sku_error']='Please insert SKU.'
        : ((iconv_strlen($sku)<5) ?  $_SESSION['sku_error']='sku must be at least 5 characters.' : Product_Validation :: redirectToaddPage());

        // if(empty($name)){
        //     $_SESSION['name_error']='Please insert name.';
        // }elseif(iconv_strlen($name)<3){
        //     $_SESSION['name_error']='name must be at least 3 characters.';
        // }

        $nameVal = (empty($name)) ? $_SESSION['name_error']='Please insert name.'
        : ((iconv_strlen($name)<3) ?  $_SESSION['name_error']='name must be at least 3 characters.' : Product_Validation :: redirectToaddPage());


        // if(empty($price)){
        //     $_SESSION['price_error']='Please insert price.';
        // }elseif(preg_match( "/[^0-9,.]/", $price)){
        //     $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        // }

        $priceVal = (empty($price)) ? $_SESSION['price_error']='Please insert price.'
        : ((preg_match( "/[^0-9,.]/", $price)) ? $_SESSION['price_error']='Only integers and rational numbers are allowed.' : Product_Validation :: redirectToaddPage());


        // // DVD input validation
        // if(empty($size_mb)){
        //     $_SESSION['mb_error']='*Please insert DVD size.';
        // }elseif(preg_match( "/[^0-9]/", $size_mb)){
        //     $_SESSION['mb_error']='Only integer numbers are allowed.';
        // }

        $sizeVal = (empty($size_mb)) ?  $_SESSION['mb_error']='Please insert DVD size.'
        : ((preg_match( "/[^0-9,.]/", $size_mb)) ? $_SESSION['mb_error']='Only integer numbers are allowed.' : Product_Validation :: redirectToaddPage());




        // // Book input validation
        // if(empty($book_weight)){
        //     $_SESSION['boo_error']='*Please insert Book size.';
        // }elseif(preg_match( "/[^0-9,.]/", $book_weight)){
        //     $_SESSION['boo_error']='Only integers and rational numbers are allowed.';
        // }


        $weightVal = (empty($book_weight)) ?  $_SESSION['boo_error']='Please insert Book size.'
        : ((preg_match( "/[^0-9,.]/", $book_weight)) ? $_SESSION['boo_error']='Only integers and rational numbers are allowed.' : Product_Validation :: redirectToaddPage());



        // Furniture input validation

        // if(empty($height) && empty($width) && empty($length)){
        //     $_SESSION['h_error']='*Please insert Furniture height.';
        //     $_SESSION['w_error']='*Please insert Furniture width.';
        //     $_SESSION['l_error']='*Please insert Furniture lenght.';
        // }elseif(preg_match( "/[^0-9,.]/", $height)){
        //     $_SESSION['h_error']='Only integers and rational numbers are allowed.';
        // }elseif(preg_match( "/[^0-9,.]/", $width)){
        //     $_SESSION['w_error']='Only integers and rational numbers are allowed.';
        // }elseif(preg_match( "/[^0-9,.]/", $length)){
        //     $_SESSION['l_error']='Only integers and rational numbers are allowed.';
        // }

        $furVal1 = (empty($height)) ? $_SESSION['h_error']='*Please insert Furniture height.'
        : ((preg_match( "/[^0-9,.]/", $height)) ? $_SESSION['h_error']='Only integers and rational numbers are allowed.': Product_Validation :: redirectToaddPage());

        $furVal2 = (empty($width)) ? $_SESSION['w_error']='*Please insert Furniture width.'
        : ((preg_match( "/[^0-9,.]/", $width)) ? $_SESSION['w_error']='Only integers and rational numbers are allowed.': Product_Validation :: redirectToaddPage());

        $furVal3 = (empty($length)) ? $_SESSION['l_error']='*Please insert Furniture lenght.'
        : ((preg_match( "/[^0-9,.]/", $length)) ? $_SESSION['l_error']='Only integers and rational numbers are allowed.': Product_Validation :: redirectToaddPage());


        Product_Validation :: redirectToaddPage();


    }


    // If a session with certain names is not created, then the entered data is considered valid and is sent to the database

    public function insertDvd($sku, $name, $price, $size_mb){

        $dvdInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['mb_error'])
        ? $InsertDvd = new Product_Dvd() : die();
        !isset($_SESSION['sku_error']) ? $InsertDvd->setSku($sku) : null;
        !isset($_SESSION['name_error']) ? $InsertDvd->setName($name) : null;
        !isset($_SESSION['price_error']) ? $InsertDvd->setPrice($price) : null;
        !isset($_SESSION['mb_error']) ? $InsertDvd->setSize($size_mb) : null;

        // $InsertDvd->insertProducts() ? header("Location: http://product-app/") : die();
        $InsertDvd->insertProducts() ? Product_Validation :: redirectToMainPage() : die();
    }


    public function insertBook($sku, $name, $price, $book_weight){

        $bookInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['boo_error'])
        ? $InsertBook = new Product_Book() : die();
        !isset($_SESSION['sku_error']) ? $InsertBook->setSku($sku) : null;
        !isset($_SESSION['name_error']) ? $InsertBook->setName($name) : null;
        !isset($_SESSION['price_error']) ? $InsertBook->setPrice($price) : null;
        !isset($_SESSION['boo_error']) ? $InsertBook->setWeight($book_weight) : null;

        $InsertBook->insertProducts() ? Product_Validation :: redirectToMainPage() : die();
    }


    public function insertFurniture($sku, $name, $price, $height, $width, $length){

        $bookInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['h_error'])
        && !isset($_SESSION['w_error'])  && !isset($_SESSION['l_error'])
        ? $InsertFurniture = new Product_Furniture() : die();
        !isset($_SESSION['sku_error']) ? $InsertFurniture->setSku($sku) : null;
        !isset($_SESSION['name_error']) ? $InsertFurniture->setName($name) : null;
        !isset($_SESSION['price_error']) ? $InsertFurniture->setPrice($price) : null;
        !isset($_SESSION['h_error']) ? $InsertFurniture->setHeight($height) : null;
        !isset($_SESSION['w_error']) ? $InsertFurniture->setWidth($width) : null;
        !isset($_SESSION['l_error']) ? $InsertFurniture->setLength($length) : null;

        $InsertFurniture->insertProducts() ? Product_Validation :: redirectToMainPage() : die();

    }



}