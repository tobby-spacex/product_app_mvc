<?php
// include_once '/app/libraries/Product_Dvd.php';
// require_once $_SERVER['DOCUMENT_ROOT'] .'/app/libraries/Product_Dvd.php';

$dvd_product = new Product_Dvd();
$data_dvd = $dvd_product->getProducts('*', 'dvd');

// $InsertData = new Product_Dvd();

// if(isset($_POST["submit"]))
// {
//     $InsertData->setSku($_POST['sku']);
//     $InsertData->setName($_POST['name']);
//     $InsertData->setPrice($_POST['price']);
//     $InsertData->setSize($_POST['size_mb']);

//     var_dump($InsertData);

//     if($InsertData->insertProducts())
//     {
//         header("Location: http://product-app/");
//     }

// }