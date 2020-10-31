<?php

namespace Classes;

use Classes\Controller;

class CourseMember extends Controller
{
    protected static $table = "courses_members";
    protected static $column = " `courses_members`.`id`, `courses_members`.`id_courses`,`courses_members`.`id_member`, `users`.`username`, `users`.`email`, `courses`.`name`, `courses`.`id_user` AS `owner`";
    protected static $condition = " JOIN `users` ON `courses_members`.`id_member` = `users`.`id` JOIN `courses` ON `courses_members`.`id_courses` = `courses`.`id` ";
    public static function index($id)
    {
        return Controller::view("course_member/index",Database::get(self::$table,self::$column,self::$condition." WHERE `courses_members`.`id_courses` = ".$id));
    }
    public static function ListMember($id)
    {
        return Database::get(self::$table,self::$column,self::$condition." WHERE `courses_members`.`id_courses` = ".$id);
    }

    public static function create()
    {
        return Controller::view("course_member/create");
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        self::$column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("course/edit", Database::get(self::$table,self::$column,$condition));
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


// SELECT `courses_members`.`id`, `courses_members`.`id_courses`,`courses_members`.`id_member`, `users`.`username`, `users`.`email` FROM `courses_members` JOIN `users` ON `courses_members`.`id_member` = `users`.`id` 