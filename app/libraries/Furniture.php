<?php

session_start();
class Furniture extends Main_Product_Validation
{
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
            Furniture :: redirectToMainPage();
        };
        return false;
    }

    protected function saveDb($data)
    {
        $furniture = new Product_Furniture();
        $furniture->setSku($data['sku']);
        $furniture->setName($data['name']);
        $furniture->setPrice($data['price']);
        $furniture->setHeight($data['height']);
        $furniture->setWidth($data['width']);
        $furniture->setLength($data['length']);
        $furniture->insertProducts();
    }


    protected function validation($data){

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


        if(empty($data['height'])){
            $_SESSION['h_error']='*Please insert Furniture height.';
        }elseif(preg_match( "/[^0-9]/", $data['height'])){
            $_SESSION['h_error']='Only integers and rational numbers are allowed.';
        }

        if(empty($data['width'])){
            $_SESSION['w_error']='*Please insert Furniture width.';
        }elseif(preg_match( "/[^0-9]/", $data['width'])){
            $_SESSION['w_error']='Only integers and rational numbers are allowed.';
        }

        if(empty($data['length'])){
            $_SESSION['l_error']='*Please insert Furniture lenght.';
        }elseif(preg_match( "/[^0-9]/", $data['length'])){
            $_SESSION['l_error']='Only integers and rational numbers are allowed.';
        }

        Furniture :: redirectToaddPage();

        if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error'])
        && !isset($_SESSION['h_error']) && !isset($_SESSION['w_error']) && !isset($_SESSION['l_error'])){
            return true;
        }

    }
}