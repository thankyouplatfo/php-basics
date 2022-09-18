<?php
    //
    class DBConnection{
        private static $pdo;
        public static function make()
        {
            try {
                self::$pdo = self::$pdo ? : new PDO("mysql:host=localhost;dbname=php_basics",'root','');
                //
                return self::$pdo;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }