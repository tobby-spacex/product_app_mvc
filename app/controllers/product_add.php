<?php

ob_start();
class Product_add extends Controller{
    public function __construct(){
        parent:: __construct();
        $this->view->render(strtolower(get_class($this)));

    }

    public function insertData(){

    $InsertData = new Product_Dvd();

    if(isset($_POST["submit"]))
    {
        $InsertData->setSku($_POST['sku']);
        $InsertData->setName($_POST['name']);
        $InsertData->setPrice($_POST['price']);
        $InsertData->setSize($_POST['size_mb']);


        if($InsertData->insertProducts())
        {
            header("Location: http://product-app/");
        }

    }

    }
}