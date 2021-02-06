<?php

session_start();
class NoneValidator
{
    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }

    public function add($data){
        $this->validation($data);
        NoneValidator :: redirectToaddPage();
    }

    protected function validation($data){

        if(empty($data['sku'])){
            $_SESSION['sku_error']='Please insert SKU.';
        }elseif(iconv_strlen($data['sku']) < 5 ){
            $_SESSION['sku_error']='sku must be at least 5 characters.';
        }


        if(empty($data['name'])){
            $_SESSION['name_error']='Please insert name.';
        }elseif(iconv_strlen($data['name']) < 4){
            $_SESSION['name_error']='name must be at least 4 characters.';
        }


        if(empty($data['price'])){
            $_SESSION['price_error']='Please insert price.';
        }elseif(preg_match( "/[^0-9,.]/", $data['price'])){
            $_SESSION['price_error']='Only integers and rational numbers are allowed.';
        }

        $_SESSION["type"] = "none";

        NoneValidator :: redirectToaddPage();

        if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error'])){
            return true;
        }

    }
}
