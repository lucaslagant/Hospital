<?php
require_once(dirname(__FILE__)."/../config/bdd.php");

class Database{
    private static $_pdo;


    public static function connect(){
        try{
            if (is_null(self::$_pdo)) {
                self::$_pdo = new PDO(DNS, USER, PASSWORD);
                self::$_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                
            }
            // var_dump(self::$_pdo);
            return self::$_pdo;           
        }
        catch(PDOException $ex){
            echo 'erreur'. $ex->getMessage();
        }
    }
    
    
}