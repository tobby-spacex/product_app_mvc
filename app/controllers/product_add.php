<?php

ob_start();
// session_start();
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

        // In this part handled differences in product types without using conditional statment. By product type appeal to the product class with array maps
        $products = [
            'dvd' => new DVD(),
            'book' => new Book(),
            'furniture' => new Furniture(),
            'none' => new NoneValidator()
        ];

        // takes data from the selector -> main_fields.php
        $product = $_POST['product'];

        // Сreating a class from the selected product type
        $productClass = $products[$product];
        $productClass->add($_POST);
    }
}