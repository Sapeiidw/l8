<?php

namespace Classes;

use Classes\Controller;

class Alert extends Controller
{
    public static function success($path)
    {
        $data = [
            "title" => "Success",
            "message" => "",
            "type" => "success",
            "path" => $path,
        ];
        return Controller::view("components/alert.component",$data);
    }
    public static function updated($path)
    {
        $data = [
            "title" => "Success",
            "message" => "Your data has been updated",
            "type" => "success",
            "path" => $path,
        ];
        return Controller::view("components/alert.component",$data);
    }
    public static function deleted($path)
    {
        $data = [
            "title" => "Success",
            "message" => "Your data has been deleted",
            "type" => "success",
            "path" => $path,
        ];
        return Controller::view("components/alert.component",$data);
    }
    public static function warning($path,$message = "")
    {
        $data = [
            "title" => "Oops",
            "message" => $message,
            "type" => "warning",
            "path" => $path,
        ];
        return Controller::view("components/alert.component",$data);
    }
}
