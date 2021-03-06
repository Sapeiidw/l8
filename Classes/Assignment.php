<?php

namespace Classes;

use Classes\Controller;

class Assignment extends Controller
{
    protected static $table = "assignments";
    protected static $column = " `assignments`.`id`,`assignments`.`id_course`,`assignments`.`name`,`assignments`.`deskripsi`,`assignments`.`deadline`,`assignments`.`create_at`, `courses`.`id_user` ";
    protected static $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` ";
    public static function index($id)
    {
        return Controller::view("assignment/index",Database::get(self::$table,self::$column,self::$condition." WHERE `assignments`.`id_course` = ".$id));
    }
    public static function profile($course,$id)
    {
        $course;
        return Controller::view("assignment/single",Database::get(self::$table,self::$column,self::$condition." WHERE assignments.id = ".$id));
    }
    public static function getProfile($id)
    {
        return Database::get(self::$table,self::$column,self::$condition." WHERE assignments.id = ".$id);
    }
    public static function getForCourse($id)
    {
        return Database::get(self::$table,self::$column,self::$condition." WHERE `assignments`.`id_course` = ".$id);
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
        return Controller::view("assignment/edit", Database::get(self::$table,self::$column,self::$condition." WHERE assignments.id = ".$id));
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
