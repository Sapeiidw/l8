<?php

namespace Classes;

use Classes\Controller;

class Prodi extends Controller
{
    protected static $table = "prodies";

    public static function index()
    {
        return Controller::view("prodi/index",Database::get(self::$table));
    }

    public static function profile($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("prodi/single",Database::get(self::$table,$column,$condition));
    }
    public static function getForJurusan()
    {
        return Database::get(self::$table);
    }
    public static function create()
    {
        return Controller::view("prodi/create");
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("prodi/edit", Database::get(self::$table,$column,$condition));
    }

    public static function update($data,$id)
    {
        $condition = "WHERE id = ".$id."";
        Database::put(self::$table,$data,$condition);
        print_r(Database::put(self::$table,$data,$condition));
        header("location: /pabw-oop/prodi");
    }

    public static function destroy($id)
    {
        Database::delete(self::$table,$id);
        header("location: /pabw-oop/prodi");
    }
}
