<?php

namespace Classes;

use Classes\Controller;

class Users extends Controller
{
    protected static $table = "users";

    public static function index()
    {
        $get = Database::get(self::$table);
        foreach ($get as $data) {
            print_r($data);
        }
        // return Controller::view("user/index",$data);
    }

    public static function profile($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        $get = Database::get(self::$table,$column,$condition);
        foreach ($get as $data) {
            print_r($data);
        }
    }

    public static function create($data)
    {
        Database::insert(self::$table, $data);
        header("location: index.php");
    }

    public static function destroy($id)
    {
        Database::delete(self::$table,$id);
        header("location: index.php");
    }

    public static function update($data,$id)
    {
        $condition = "WHERE id = ".$id;
        Database::put(self::$table,$data,$condition);
    }
}
