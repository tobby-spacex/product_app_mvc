<?php

class Product_Dvd extends Main_Product_Class
{

    private $id;
    private $sku;
    private $name;
    private $price;
    private $size;

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

    function setSize($size){
        $this->size = $size;
    }

    function getSize(){
        return $this->size;
    }




   // Method for fetching product from Database
     public function getProducts($fields, $tablename){
        $array = array();
        $query = "SELECT $fields FROM $tablename ";
        $result = mysqli_query($this->db->getConnection(), $query);
        // $result = $this->db->getConnection()->query($query);

        while($row = mysqli_fetch_assoc($result)){
                $array[] = $row;
            }
            return $array;
    }

    public function insertProducts(){
        $query = "INSERT INTO dvd (dvd_sku, dvd_name, dvd_price, size_mb) VALUES ('". $this->getSku() . "','" . $this->getName(). "','" . $this->getPrice(). "','" . $this->getSize(). "')";
        // $result = $this->db->getConnection()->query($query);

        $result = mysqli_query($this->db->getConnection(), $query);

        // $result = $this->db->getConnection()->data_input($query);
        return $result;

    }

}
