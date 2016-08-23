<?php

/**
 * Created by PhpStorm.
 * User: kevyn-yilmaz
 * Date: 8/23/16
 * Time: 1:11 PM
 */
class Database
{
    private static $conn = null;

    public function __construct(){
    }

    public static function connect(){
        include_once 'config.php';

        // One connection through whole application
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . HOSTNAME . ";" . "dbname=" . DATABASE, uNAME,uPASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect(){
        self::$conn = null;
    }
}