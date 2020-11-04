<?php

namespace Classes;

use Classes\Controller;

class Course extends Controller
{
    protected static $table = "courses";
    protected static $column = " `courses`.`id`, `courses`.`id_matkul`, `courses`.`id_user`, `courses`.`name`, `users`.`username` AS `owner_name`, `users`.`email` AS `owner_email`, `matkuls`.`kode` AS `matkul_kode`, `matkuls`.`name` AS `matkul_name` ";
    protected static $condition = " JOIN `users` ON `id_user`=`users`.`id` JOIN `matkuls` ON `id_matkul`=`matkuls`.`id` ";
    public static function index()
    {
        // JOIN `courses_members` ON `courses_members`.`id_courses` = `courses`.`id` 
        return Controller::view("course/index",Database::get(self::$table,self::$column,self::$condition));
    }
    public static function ListCourse()
    {
        return Database::get(self::$table,self::$column,self::$condition);
    }
    public static function GetOneCourse($id)
    {
        return Database::get(self::$table,self::$column,self::$condition." WHERE `courses`.`id` =".$id);
    }
    public static function profile($id)
    {
        return Controller::view("course/single",Database::get(self::$table,self::$column,self::$condition." WHERE `courses`.`id`=".$id));
    }
    public static function getForUser($id)
    {

        return Controller::view("course/index",Database::get(self::$table,self::$column." ,`courses_members`.`id` AS `member_id` ",self::$condition." JOIN `courses_members` ON `courses_members`.`id_courses` = `courses`.`id`  WHERE `courses_members`.`id_member` =".$id));
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
    }

    public static function destroy($id)
    {
        return Database::delete(self::$table,$id);
    }
}


// SELECT `courses`.`id`, `courses`.`id_matkul`, `courses`.`id_user`, `courses`.`name`, `users`.`username` AS `owner_name`, `users`.`email` AS `owner_email`, `matkuls`.`kode` AS `matkul_kode`, `matkuls`.`name` AS `matkul_name` FROM `courses` JOIN `users` ON `id_user`=`users`.`id` JOIN `matkuls` ON `id_matkul`=`matkuls`.`id` 