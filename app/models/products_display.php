<?php

$dvd_product = new Product_Dvd();
// $data_dvd = $dvd_product->getProducts('*', 'dvd');
$data_dvd = $dvd_product->getProducts();
echo '<pre>';
// print_r($data_dvd);
echo  '</pre>';



// $book_product = new Product_Book();
// $data_book = $book_product->getProducts('*', 'book');


// $furniture_product = new Product_Furniture();
// $data_furniture = $furniture_product->getProducts('*', 'furniture');
