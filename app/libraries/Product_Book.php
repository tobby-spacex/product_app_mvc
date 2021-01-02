<?php

class Product_Book extends Main_Product_Class
{
    public function __construct(){
        parent::__construct();

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

    }

}
