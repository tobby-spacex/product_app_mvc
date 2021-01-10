<?php

class Product_Furniture extends Main_Product_Class
{
    private $id;
    private $sku;
    private $name;
    private $price;
    private $height;
    private $width;
    private $length;

    public function __construct(){
        parent::__construct();

    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setSku($sku){
        $this->sku = $sku;
    }

    function getSku(){
        return $this->sku;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setPrice($price){
        $this->price = $price;
    }

    function getPrice(){
        return $this->price;
    }

    function setHeight($height){
        $this->height = $height;
    }

    function getHeight(){
        return $this->height;
    }

    function setWidth($width){
        $this->width = $width;
    }

    function getWidth(){
        return $this->width;
    }

    function setLength($length){
        $this->length = $length;
    }

    function getLength(){
        return $this->length;
    }


     public function getProducts($fields, $tablename){
        $array = array();
        $query = "SELECT $fields FROM $tablename ";
        // $result = mysqli_query($this->db->getConnection(), $query);
        $result = $this->db->getConnection()->query($query);
        while($row = mysqli_fetch_assoc($result)){
                $array[] = $row;
            }
            return $array;
    }

    public function insertProducts(){
        $query = "INSERT INTO furniture (f_sku, f_name, f_price, f_height, f_width, f_length) VALUES
        ('". $this->getSku() . "','" . $this->getName(). "','" . $this->getPrice(). "','" . $this->getHeight(). "','" . $this->getWidth(). "','" . $this->getLength(). "') ";

        $result = mysqli_query($this->db->getConnection(), $query);
        return $result;

    }


    public function deleteProductById($product_Id){
        $query = "DELETE FROM furniture WHERE id='$product_Id' ";
        $result = mysqli_query($this->db->getConnection(), $query);
        return $result;
    }
}