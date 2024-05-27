<?php

abstract class Connection
{
    private static $conn;

    public static function getConn()
    {
        if(self::$conn == null){
            self::$conn = new PDO('mysql:host=10.91.249.10;dbname=sistemaEscolarNicollas','root','');
        }

        return self::$conn;
    }
}