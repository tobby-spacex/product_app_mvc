<?php

$dvd_product = new Product_Dvd();
$data_dvd = $dvd_product->getProducts('*', 'dvd');


$book_product = new Product_Book();
$data_book = $book_product->getProducts('*', 'book');


$furniture_product = new Product_Furniture();
$data_furniture = $furniture_product->getProducts('*', 'furniture');