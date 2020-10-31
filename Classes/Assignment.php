<?php

namespace Classes;

use Classes\Controller;

class Assignment extends Controller
{
    protected static $table = "assignments";

    public static function index($id)
    {
        $column = " assignments.id,assignments.id_course,assignments.name,deskripsi,assignments.deadline, courses.id_user ";
        $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` WHERE assignments.id_course = ".$id;
        return Controller::view("assignment/index",Database::get(self::$table,$column,$condition));
    }
    public static function profile($id)
    {
        $column = " assignments.id,assignments.id_course,assignments.name,deskripsi,assignments.deadline, courses.id_user ";
        $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` WHERE assignments.id = ".$id;
        return Controller::view("assignment/single",Database::get(self::$table,$column,$condition));
    }
    public static function getForJurusan()
    {
        return Database::get(self::$table);
    }
    public static function create($id)
    {
        return Controller::view("assignment/create",$id);
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = " assignments.id,assignments.id_course,assignments.name,deskripsi,assignments.deadline, courses.id_user ";
        $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` WHERE assignments.id = ".$id;
        return Controller::view("assignment/edit", Database::get(self::$table,$column,$condition));
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
