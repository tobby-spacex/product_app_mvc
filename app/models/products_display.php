<?php

// $dvd_product = new Product_Dvd();
// $data_dvd = $dvd_product->getProducts();

$product_items = new Product_Fetch();
$product_data = $product_items->getProducts();

// echo '<pre>';
// print_r($product_data);
// echo  '</pre>';

// $book_product = new Product_Book();
// $data_book = $book_product->getProducts('*', 'book');

// $furniture_product = new Product_Furniture();
// $data_furniture = $furniture_product->getProducts('*', 'furniture');
