<?php

namespace Classes;

use Classes\Controller;

class Submission extends Controller
{
    protected static $table = "submissions";
    protected static $column = " assignments.id,assignments.id_course,assignments.name,deskripsi,assignments.deadline, courses.id_user ";

    public static function index($id)
    {
        $column = " `submissions`.`id`,id_assignment,id_user,status,`submissions`.`create_at`, `submissions`.`name` AS `submission_name`, `users`.`username` AS `username`, `users`.`email` AS `email` ";
        $condition = " JOIN `users` ON `users`.`id` = `submissions`.`id_user` WHERE `submissions`.`id_assignment` = ".$id;
        return Controller::view("submission/index",Database::get(self::$table,$column,$condition));
    }
    public static function profile($id)
    {
        $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` WHERE assignments.id = ".$id;
        return Controller::view("submission/single",Database::get(self::$table,self::$column,$condition));
    }
    public static function getProfile($id)
    {
        $condition = " JOIN `courses` ON `courses`.`id`=`assignments`.`id_course` WHERE assignments.id = ".$id;
        return Database::get(self::$table,self::$column,$condition);
    }
    public static function create($id)
    {
        return Controller::view("submission/create",$id);
    }
    public static function store($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = " `submissions`.`id`,`submissions`.`name`,`submissions`.`status`, `submissions`.`id_user` AS `submission_owner`, `courses`.`id_user` AS `course_owner` ";
        $condition = " JOIN `assignments` ON `submissions`.`id_assignment` = `assignments`.`id` JOIN `courses` ON `courses`.`id` = `assignments`.`id_course` WHERE `submissions`.`id` =  ".$id;
        return Controller::view("submission/edit", Database::get(self::$table,$column,$condition));
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
