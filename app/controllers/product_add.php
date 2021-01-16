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


        if(!isset($_SESSION['mb_error'])){
            $product_Validation->insertDvd($sku, $name, $price, $size_mb);
        } elseif(!isset($_SESSION['boo_error'])){
            $product_Validation->insertBook($sku, $name, $price, $book_weight);
        } elseif(!isset($_SESSION['w_error'])){
            $product_Validation->InsertFurniture($sku, $name, $price, $height, $width, $length);
        }




        // if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['mb_error'])){
        //     $InsertData = new Product_Dvd();
        //     $InsertData->setSku($sku);
        //     $InsertData->setName($name);
        //     $InsertData->setPrice($price);
        //     $InsertData->setSize($size_mb);

        //     if($InsertData->insertProducts())
        //     {
        //         header("Location: http://product-app/");
        //     }
        // } else{
        //     die;
        // }

        // $dvdInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['mb_error'])
        // ? $InsertData = new Product_Dvd(),
        //  $InsertData->setSku($sku),
        //  $InsertData->setName($name),
        //  $InsertData->setPrice($price),
        //  $InsertData->setSize($size_mb),
        //  $InsertData->insertProducts()
        //  header("Location: http://product-app/") : null;


        // $dvdInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['mb_error'])
        // ? $InsertDvd = new Product_Dvd() : die();
        // !isset($_SESSION['sku_error']) ? $InsertDvd->setSku($sku) : null;
        // !isset($_SESSION['name_error']) ? $InsertDvd->setName($name) : null;
        // !isset($_SESSION['price_error']) ? $InsertDvd->setPrice($price) : null;
        // !isset($_SESSION['mb_error']) ? $InsertDvd->setSize($size_mb) : null;

        // $InsertDvd->insertProducts() ? header("Location: http://product-app/") : die();


        // $bookInsert = !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['boo_error'])
        // ? $InsertBook = new Product_Book() : die();
        // !isset($_SESSION['sku_error']) ? $InsertBook->setSku($sku) : null;
        // !isset($_SESSION['name_error']) ? $InsertBook->setName($name) : null;
        // !isset($_SESSION['price_error']) ? $InsertBook->setPrice($price) : null;
        // !isset($_SESSION['boo_error']) ? $InsertBook->setWeight($book_weight) : null;

        // $InsertBook->insertProducts() ? header("Location: http://product-app/") : null;



    //   if(!isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['boo_error']) ){  //
    //         $InsertData = new Product_Book();
    //         $InsertData->setSku($sku);
    //         $InsertData->setName($name);
    //         $InsertData->setPrice($price);
    //         $InsertData->setWeight($book_weight);

    //         if($InsertData->insertProducts())
    //         {
    //             header("Location: http://product-app/");
    //         }
    //     } else{
    //         die;
    //     }



        // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['b_weight']) ){
        //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['b_weight'])){
        //         $InsertBook = new Product_Book();
        //         $InsertBook->setSku($_POST['sku']);
        //         $InsertBook->setName($_POST['name']);
        //         $InsertBook->setPrice($_POST['price']);
        //         $InsertBook->setWeight($_POST['b_weight']);

        //         if($InsertBook->insertProducts())
        //         {
        //             header("Location: http://product-app/");
        //         }
        //     }

        // }

        // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['height']) && isset($_POST['width']) && isset($_POST['length']) ){
        //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['height'])  && !empty($_POST['width']) && !empty($_POST['length']) ){

        //         $InsertFurniture = new Product_Furniture();
        //         $InsertFurniture->setSku($_POST['sku']);
        //         $InsertFurniture->setName($_POST['name']);
        //         $InsertFurniture->setPrice($_POST['price']);
        //         $InsertFurniture->setHeight($_POST['height']);
        //         $InsertFurniture->setWidth($_POST['width']);
        //         $InsertFurniture->setLength($_POST['length']);

        //         if($InsertFurniture->insertProducts())
        //         {
        //             header("Location: http://product-app/");
        //         }
        //     }

        // }


    // }

    }
}