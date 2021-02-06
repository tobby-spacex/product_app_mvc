<?php

abstract class Main_Product_Class
{
    public function __construct(){
        $this->db = new Database();
    }

    // abstract public function getProducts($fields,$tablename);

    abstract public function insertProducts();

    abstract public function deleteProductById($product_Id);

}