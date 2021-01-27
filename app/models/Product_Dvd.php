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

    // public function __construct($sku, $name, $price, $size){
    //     $this->sku = $sku;
    //     $this->name = $name;
    //     $this->price = $price;
    //     $this->size = $size;
    //     parent::__construct();
    // }


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



    // public function insertProducts(){
    //     $query = "INSERT INTO dvd (dvd_sku, dvd_name, dvd_price, size_mb) VALUES ('". $this->getSku() . "','" . $this->getName(). "','" . $this->getPrice(). "','" . $this->getSize(). "')";
    //     // $result = $this->db->getConnection()->query($query);
    //     $result = mysqli_query($this->db->getConnection(), $query);
    //     // $result = $this->db->getConnection()->data_input($query);
    //     return $result;
    // }

    //To protect against SQL injection
    public function insertProducts(){
        $query = "INSERT INTO dvd (dvd_sku, dvd_name, dvd_price, size_mb) VALUES (?, ?, ? ,?)";
        // $result = $this->db->getConnection()->query($query);
        $stmt = mysqli_prepare($this->db->getConnection(), $query);
        $stmt->bind_param("sssd", $this->getSku(), $this->getName(), $this->getPrice(), $this->getSize());
        $result = $stmt->execute();
        return $result;
    }


   // Method for fetching product from Database
   public function getProducts($fields, $tablename){
    $array = array();
    $query = "SELECT $fields FROM $tablename ";
    $result = mysqli_query($this->db->getConnection(), $query);
    while($row = mysqli_fetch_assoc($result)){
            $array[] = $row;
        }
        return $array;
}


    public function deleteProductById($product_Id){
        $query = "DELETE FROM dvd WHERE id='$product_Id' ";
        $result = mysqli_query($this->db->getConnection(), $query);
        return $result;
   }


}