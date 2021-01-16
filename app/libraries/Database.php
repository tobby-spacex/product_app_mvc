<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $connection;



    public function __construct(){
          $this->connection();
    }


    public function connection(){
        try{
          $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) {
          echo "Database connection error". $e->getMessage();
        }
    }


    public function getConnection(){
        return $this->connection;
    }


    public function data_input($query){
      $this->conn->query($query);
      $this->conn->close();
  }

    //     $dsn = 'mysql:host='.$this ->host . '; dbname=' . $this ->dbname;

    //      $options = array(
    //         PDO::ATTR_PERSISTENT => true,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

    //     );

    //     try{
    //         $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //         die();
    //     }

    // try {

    //     $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    //     echo "it is ok";

    // } catch (Exception $e) {
    //     echo "Database connection error". $e->getMessage();
    }