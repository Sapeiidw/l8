<?php

namespace Classes;

use Classes\Controller;

class Users extends Controller
{
    protected static $table = "users";

    public static function index()
    {
        return Controller::view("user/index",Database::get(self::$table));
    }
    public static function ListUsers()
    {
        return Database::get(self::$table);
    }
    public static function profile($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("user/index",Database::get(self::$table,$column,$condition));
    }
    public static function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $conditioin = "WHERE email = '$email' and password = '$password' ";
        $query = Database::get("users","*",$conditioin);
        if (!$query) {
            die(Alert::warning("login","wrong email or password!!"));
        } else {
            foreach ($query as $data) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['role'] = $data['role'];
            }
            return $query;
        }
    }
    public static function register()
    {
        return Controller::view("user/create");
    }
    public static function create($data)
    {
        return Database::insert(self::$table, $data);
    }

    public static function edit($id)
    {
        $column = "*";
        $condition = "WHERE id = ".$id;
        return Controller::view("user/edit", Database::get(self::$table,$column,$condition));
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
