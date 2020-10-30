<?php

namespace Classes;

use Classes\Database;

class Controller extends Database
{
    public static function view($page,$data =[])
    {
        include_once "views/" . $page . ".php";
    }

    public static function redirect($page,$data =[])
    {
        header("location : . $page .");
    }
}
