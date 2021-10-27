<?php
require_once(dirname(__FILE__)."/../config/bdd.php");

class Database{
    public static function connect(){
        try{
            $pdo = new PDO(DNS, USER, PASSWORD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        }
        catch(PDOException $ex){
            echo 'erreur'. $ex->getMessage();
        }
    }
    
    
}