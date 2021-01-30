<?php

session_start();
class DVD extends Main_Product_Validation
{
    public function __construct(){

    }

    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }

    public static function  redirectToMainPage(){
        header("Location: http://product-app/");
    }

    public function add($data)
    {
        if ($this->validation($data))
        {
            $this->saveDb($data);
            Dvd :: redirectToMainPage();
        };
        return false;
    }

    protected function saveDb($data)
    {
        $dvd = new Product_Dvd();
        $dvd->setSku($data['sku']);
        $dvd->setName($data['name']);
        $dvd->setPrice($data['price']);
        $dvd->setSize($data['size_mb']);
        $dvd->insertProducts();
    }

    protected function validation($data){   //$sku, $name, $price, $size_mb

        // $fields = ['sku', 'name', 'price' , 'size_mb'];
        // foreach ($fields as $field) {
        //     if (!isset($data[$field]))
        //     {
        //         return false;
        //     }
        // }
        // return true;


        if(empty($data['sku'])){
            $_SESSION['sku_error']='Please insert SKU.';
        }elseif(iconv_strlen($data['sku']) < 5 ){
            $_SESSION['sku_error']='sku must be at least 5 characters.';
        }


        if(empty($data['name'])){
            $_SESSION['name_error']='Please insert name.';
        }elseif(iconv_strlen($data['name']) < 5){
            $_SESSION['name_error']='name must be at least 3 characters.';
        }


        if(empty($data['price'])){
            $_SESSION['price_error']='Please insert price.';
        }elseif(preg_match( "/[^0-9,.]/", $data['price'])){
            $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        }


        if(empty($data['size_mb'])){
            $_SESSION['mb_error']='*Please insert DVD size.';
        }elseif(preg_match( "/[^0-9]/", $data['size_mb'])){
            $_SESSION['mb_error']='Only integer numbers are allowed.';
        }

        Dvd :: redirectToaddPage();

        if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error'])
        && !isset($_SESSION['mb_error'])){
            return true;
        }


    }
}