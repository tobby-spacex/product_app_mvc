<?php

ob_start();

class Product_Delete
{
    public function __construct(){
        if(isset($_POST['delete'])){

            $delete = $_POST['box'];

            $dvd_delete = new Product_Dvd();
            $book_delete = new Product_Book();
            $furniture_delete = new Product_Furniture();


            foreach($delete as $del_Id){
                $dvd_delete->deleteProductById($del_Id);
                $book_delete->deleteProductById($del_Id);
                $furniture_delete->deleteProductById($del_Id);
                header("Location: http://product-app/");
            }
        }


    }

}