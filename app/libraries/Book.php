<?php

// The book class validates the input and submits the data to the database. DVD and Furniture classes in the libraries folder work in the same analogy.
session_start();
class Book extends Main_Product_Validation
{
    public static function  redirectToaddPage(){
        header("Location: http://product-app/product_add");
    }

    public static function  redirectToMainPage(){
        header("Location: http://product-app/");
    }

    // This method is used in the Product_add class. The first entered data is validated if the validation is successful, the data will be send to the database.
    public function add($data)
    {
        if ($this->validation($data))
        {
            $this->saveDb($data);
            Book :: redirectToMainPage();
        };
        return false;
    }

    protected function saveDb($data)
    {
        $book = new Product_Book();
        $book->setSku($data['sku']);
        $book->setName($data['name']);
        $book->setPrice($data['price']);
        $book->setWeight($data['b_weight']);
        $book->insertProducts();
    }


    // Nevertheless, I used conditional operators to validate the input data, that is, after the product has already been defined.
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


        if(empty($data['b_weight'])){
            $_SESSION['boo_error']='*Please insert Book size.';
        }elseif(preg_match( "/[^0-9]/", $data['b_weight'])){
            $_SESSION['boo_error']='Only integers and rational numbers are allowed.';
        }

        Book :: redirectToaddPage();

        if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error'])
        && !isset($_SESSION['boo_error'])){
            return true;
        }

    }

}