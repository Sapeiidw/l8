<?php

namespace Classes;

use Classes\Controller;

class Matkul extends Controller
{
    protected static $table = "matkuls";

    public static function index()
    {
        return Controller::view("matkul/index",Database::get(self::$table));
    }
    public static function ListMatkul()
    {
        return Database::get(self::$table);
    }
    public static function profile($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("matkul/single",Database::get(self::$table,$column,$condition));
    }
    public static function getForJurusan()
    {
        return Database::get(self::$table);
    }
    public static function create()
    {
        return Controller::view("matkul/create");
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("matkul/edit", Database::get(self::$table,$column,$condition));
    }

    public static function update($data,$id)
    {
        $condition = "WHERE id = ".$id."";
        return Database::put(self::$table,$data,$condition);
    }

    public static function destroy($id)
    {
        return Database::delete(self::$table,$id);
    }
}
