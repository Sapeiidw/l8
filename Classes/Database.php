<?php

namespace Classes;

use PDO;

class Database 
{

    public static function __consturct()
    {
        return new PDO("mysql:host=localhost;dbname=oop", "root", "");
    }

    public static function get($table,$column = "*",$condition="")
    {
        $sql = "SELECT $column FROM $table $condition";
        $stmt = self::__consturct()->query($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($count > 0) {
            return $stmt;
        } else {
            return false;
        }
        
        return $stmt;
    }
    
    public static function insert($table,$data)
    {
        $prep = array();
        foreach($data as $key => $value ) {
            $prep[$key] = "'" .$value."'";
        }
        $sql = "INSERT INTO $table ( " . implode(', ',array_keys($data)) . ") VALUES (" . implode(', ',array_values($prep)) . ")";
        $stmt = self::__consturct()->prepare($sql);
        $stmt->execute();
        return $sql;
    }
    public static function put($table,$data,$condition)
    {
        $valueSets = array();
        foreach($data as $key => $value) {
            $valueSets[] = $key . " = '" . $value . "'";
        }

        $sql = "UPDATE $table SET ". join(",",$valueSets) ." ". $condition ."";
        $stmt = self::__consturct()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    public static function delete($table,$id)
    {
        $sql = "DELETE FROM $table WHERE id = '$id' ";
        $stmt = self::__consturct()->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public static function notEmpty($data)
    {
        $error=[];
        foreach ($data as $key => $value) {
            if(empty($value) or $value == "") {
                $error[$key] = "This $key cannot be empty!!";
            }
        }
        return $error;
    }
}
