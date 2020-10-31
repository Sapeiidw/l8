<?php

namespace Classes;

use Classes\Controller;

class Course extends Controller
{
    protected static $table = "courses";

    public static function index()
    {
        return Controller::view("course/index",Database::get(self::$table));
    }
    public static function ListCourse()
    {
        return Database::get(self::$table);
    }
    public static function profile($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("course/single",Database::get(self::$table,$column,$condition));
    }
    public static function getForJurusan()
    {
        return Database::get(self::$table);
    }
    public static function create()
    {
        return Controller::view("course/create");
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("course/edit", Database::get(self::$table,$column,$condition));
    }

    public static function update($data,$id)
    {
        $condition = "WHERE id = ".$id."";
        return Database::put(self::$table,$data,$condition);
        print_r(Database::put(self::$table,$data,$condition));
        // header("location:". BASEPATH."course");
    }

    public static function destroy($id)
    {
        return Database::delete(self::$table,$id);
        // header("location:". BASEPATH."course");
    }
}
