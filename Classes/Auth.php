<?php

namespace Classes;

use Classes\Controller;

class Auth extends Controller
{
    public static function login()
    {
        return Controller::view("user/login");
    }
    public static function register()
    {
        return Controller::view("user/create");
    }
    public static function logout()
    {
        return Controller::view("user/logout");
    }
    public static function isLogin()
    {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            header("Location: http://localhost/pabw-oop/login");
        }
    }
    public static function adminOnly()
    {
        if ($_SESSION['role'] == 'admin' ) {
            return true;
        } else {
            return false;
        }
    }
    public static function self($id)
    {
        if ($_SESSION['id'] == $id ) {
            return true;
        } else {
            return false;
        }
    }
}
