<?php

// use Controller;
// namespace Users;

use Classes\Database;

class UserController extends Database
{

    public static function index()
    {
        foreach(Database::get() as $data) {
            print_r($data);
        }
        
    }

}
