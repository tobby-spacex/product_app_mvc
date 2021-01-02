<?php

class View
{
    public function __construct(){

    }

    public function render($path){
        require $_SERVER['DOCUMENT_ROOT']. '/app/views/'.$path. '/index.php';
    }
}