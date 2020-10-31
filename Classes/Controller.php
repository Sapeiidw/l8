<?php

namespace Classes;

use Classes\Database;

class Controller extends Database
{
    public static function view($page,$data=[])
    {
        // Check for view file
        if(file_exists('views/' . $page . '.php')){
            require_once 'views/' . $page . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }

    public static function redirect($page,$data =[])
    {
        $data;
        header("Location : ".BASEPATH.". $page ."); exit;
    }
}
