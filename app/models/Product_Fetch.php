<?php

// In this class, I had to join three tables of products from the database, this was done in order to carry out the output  order by timestamp.

class Product_Fetch
{
    public function __construct(){
        $this->db = new Database();
    }

    public function getProducts(){
        $array = array();

        $query = "SELECT id, book_sku AS sku, book_name AS name, book_price AS price,  b_weight AS size, NULL AS f_width, NULL AS f_length, post_time,  'book' as origin  FROM book
        UNION ALL
        SELECT id, dvd_sku AS sku, dvd_name AS name, dvd_price AS price, size_mb AS size,   NULL AS f_width, NULL AS f_length, post_time, 'dvd' as origin  FROM dvd
        UNION ALL
        SELECT id, f_sku AS sku, f_name AS name, f_price AS price, f_height AS size, f_width, f_length, post_time,  'furniture' as origin  FROM furniture ";

        $result = mysqli_query($this->db->getConnection(), $query) or die(mysqli_error($this->db->getConnection()));
        // print_r($result);

        while($row = mysqli_fetch_assoc($result)){
                $array[] = $row;
            }

            function date_compare($a, $b)
            {
                $t1 = strtotime($a['post_time']);
                $t2 = strtotime($b['post_time']);
                return $t1 < $t2;
            }
            usort($array, 'date_compare');
            return $array;



    }
}