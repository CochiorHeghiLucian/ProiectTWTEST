<?php
class User{
 

    public static function validateUser($name="", $password=""){
        echo ($name == "lucian" and $password == "test");
        if($name == "1" and $password == "1"){
            return "valid";
        }else{
            return "invalid";
        }
    }
}