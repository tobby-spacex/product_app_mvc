<?php

class Product_Book extends Main_Product_Class
{
    private $id;
    private $sku;
    private $name;
    private $price;
    private $weight;

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

    function setWeight($weight){
        $this->weight = $weight;
    }

    function getWeight(){
        return $this->weight;
    }



    // public function insertProducts(){
    //     $query = "INSERT INTO book (book_sku, book_name, book_price, b_weight) VALUES ('". $this->getSku() . "','" . $this->getName(). "','" . $this->getPrice(). "','" . $this->getWeight(). "') ";
    //     $result = mysqli_query($this->db->getConnection(), $query);
    //     return $result;
    // }

    // To protect against SQL injection
    public function insertProducts(){
        $query = "INSERT INTO book (book_sku, book_name, book_price, b_weight) VALUES (?, ?, ? ,?)";
        $stmt = mysqli_prepare($this->db->getConnection(), $query);
        $stmt->bind_param("sssd", $this->getSku(), $this->getName(), $this->getPrice(), $this->getWeight());
        $result = $stmt->execute();
        return $result;
    }

    // public function getProducts($fields, $tablename){
    //     $array = array();
    //     $query = "SELECT $fields FROM $tablename ";
    //     // $result = mysqli_query($this->db->getConnection(), $query);
    //     $result = $this->db->getConnection()->query($query);
    //     while($row = mysqli_fetch_assoc($result)){
    //             $array[] = $row;
    //         }
    //         return $array;

    // }

    public function deleteProductById($product_Id){
        $query = "DELETE FROM book WHERE id='$product_Id' ";
        $result = mysqli_query($this->db->getConnection(), $query);
        return $result;
    }

}
