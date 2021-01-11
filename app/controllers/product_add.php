<?php

ob_start();
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


        $product_Validation = new Product_Validation();
        $product_Validation->productValidation($sku, $name, $price, $size_mb, $book_weight, $height, $width, $length);


        // $InsertData = new Product_Dvd();
        // !isset($_SESSION['sku_error']) && !isset($_SESSION['name_error']) && !isset($_SESSION['price_error']) && !isset($_SESSION['mb_error']) ?
        // $InsertData->setSku($sku):
        // $InsertData->setName($name):
        // $InsertData->setPrice($price):
        // $InsertData->setSize($size_mb)
        // header("Location: http://product-app/");


        if(isset($sku) && isset($name) && isset($price) && isset($size_mb) ){
            if(!empty($sku) && !empty($name) && !empty($price) && !empty($size_mb)){

                $InsertData = new Product_Dvd();
                $InsertData->setSku($sku);
                $InsertData->setName($name);
                $InsertData->setPrice($price);
                $InsertData->setSize($size_mb);

                if($InsertData->insertProducts())
                {
                    header("Location: http://product-app/");
                }
            }
        }






        // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['size_mb']) ){
        //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['size_mb'])){
        //         $InsertData = new Product_Dvd();
        //         $InsertData->setSku($_POST['sku']);
        //         $InsertData->setName($_POST['name']);
        //         $InsertData->setPrice($_POST['price']);
        //         $InsertData->setSize($_POST['size_mb']);

        //         if($InsertData->insertProducts())
        //         {
        //             header("Location: http://product-app/");
        //         }
        //     }
        // }

        if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['b_weight']) ){
            if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['b_weight'])){
                $InsertBook = new Product_Book();
                $InsertBook->setSku($_POST['sku']);
                $InsertBook->setName($_POST['name']);
                $InsertBook->setPrice($_POST['price']);
                $InsertBook->setWeight($_POST['b_weight']);

                if($InsertBook->insertProducts())
                {
                    header("Location: http://product-app/");
                }
            }

        }

        if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['height']) && isset($_POST['width']) && isset($_POST['length']) ){
            if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['height'])  && !empty($_POST['width']) && !empty($_POST['length']) ){

                $InsertFurniture = new Product_Furniture();
                $InsertFurniture->setSku($_POST['sku']);
                $InsertFurniture->setName($_POST['name']);
                $InsertFurniture->setPrice($_POST['price']);
                $InsertFurniture->setHeight($_POST['height']);
                $InsertFurniture->setWidth($_POST['width']);
                $InsertFurniture->setLength($_POST['length']);

                if($InsertFurniture->insertProducts())
                {
                    header("Location: http://product-app/");
                }
            }

        }


    // }

    }
}