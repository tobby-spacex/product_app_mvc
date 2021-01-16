<?php

ob_start();
session_start();
class Product_add extends Controller{
    public function __construct(){
        parent:: __construct();
        $this->view->render(strtolower(get_class($this)));

    }

    public function insertData(){

        $sku = filter_input(INPUT_POST, 'sku');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $size_mb = filter_input(INPUT_POST, 'size_mb');

        $book_weight = filter_input(INPUT_POST, 'b_weight');

        $height = filter_input(INPUT_POST, 'height');
        $width = filter_input(INPUT_POST, 'width');
        $length = filter_input(INPUT_POST, 'length');


        $_SESSION["sku"] = $sku;
        $_SESSION["name"] = $name;
        $_SESSION["price"] = $price;



        $product_Validation = new Product_Validation();
        $product_Validation->productValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length);


        // if(!isset($_SESSION['mb_error'])){
        //     $product_Validation->insertDvd($sku, $name, $price, $size_mb);
        // } elseif(!isset($_SESSION['boo_error'])){
        //     $product_Validation->insertBook($sku, $name, $price, $book_weight);
        // } elseif(!isset($_SESSION['w_error'])){
        //     $product_Validation->InsertFurniture($sku, $name, $price, $height, $width, $length);
        // }

        !isset($_SESSION['mb_error']) ? $product_Validation->insertDvd($sku, $name, $price, $size_mb)
        : (!isset($_SESSION['boo_error'])
        ? $product_Validation->insertBook($sku, $name, $price, $book_weight)
        : (!isset($_SESSION['w_error'])
        ? $product_Validation->InsertFurniture($sku, $name, $price, $height, $width, $length) : die ) );



    }
}