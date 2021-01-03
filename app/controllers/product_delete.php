<?php

ob_start();

class Product_Delete
{
    public function __construct(){
        if(isset($_POST['delete'])){

            $delete = $_POST['box'];

            $dvd_delete = new Product_Dvd();


            foreach($delete as $del_Id){
                $dvd_delete->deleteProductById($del_Id);
                header("Location: http://product-app/");
            }
        }

        // if(isset($_POST['delete'])){

        //     // $delete = $_POST['box'];

        //     $dvd_delete = new Product_Dvd();

        //     $delete = $dvd_delete->setId($_POST['box']);


        //     foreach($delete as $del_Id){
        //         $dvd_delete->deleteProductById($del_Id);
        //         header("Location: http://product-app/");
        //     }
        // }
    }

}