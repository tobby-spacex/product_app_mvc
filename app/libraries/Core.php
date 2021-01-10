<?php

// class Core {
//     public function __construct(){

//         if(isset($_GET['url'])){
//             $url = explode('/', rtrim($_GET['url'], '/'));
//         }else{
//             $url[0] = 'product_list';
//         }

//         $file_name = 'controllers/'.$url[0].'.php';

//         if(file_exists($file_name)){
//             //Podluchenie contrllers
//             require_once $file_name;
//             $product_add = new $url[0];

//         }else{
//             echo 'Error, file not found';
//         }
//     }
// }

class Core {
    public function __construct(){

        if(isset($_GET['url'])){
            $url = explode('/', rtrim($_GET['url'], '/'));
        }else{
            $url[0] = 'product_list';
        }

        $file_name = 'controllers/'.$url[0].'.php';

        if(file_exists($file_name)){
            //Podluchenie controllers
            require_once $file_name;
            $product_add = new $url[0];

            if(isset($url[1])){
                if(method_exists($product_add, $url[1])){
                    $product_add->{$url[1]}();
                }
            }

        }else{
            echo 'Error, file not found';
        }
    }
}