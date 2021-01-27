<?php

class DVD
{
    public function __construct(){


    }

    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }

    public function add($data)
    {
        if ($this->validation($data))
        {
            $this->saveDb($data);
        };
        return false;
    }

    private function saveDb($data)
    {
        $pd = new Product_Dvd();
        $pd->setSku($data['sku']);
        $pd->setName($data['name']);
        $pd->setPrice($data['price']);
        $pd->setSize($data['size_mb']);
        $pd->insertProducts();
    }

    private function validation($data){   //$sku, $name, $price, $size_mb

        $fields = ['sku', 'name', 'price' , 'size_mb'];
        foreach ($fields as $field) {
            if (!isset($data[$field]))
            {
                return false;
            }
        }
        return true;
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