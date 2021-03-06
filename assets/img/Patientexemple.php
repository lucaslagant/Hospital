<?php

include(dirname(__FILE__).'/../utils/Database.php');

class Patient{

    // private $_id;
    private $_lastname;
    private $_firstname;
    private $_birthdate;
    private $_phone;
    private $_mail;
    private $_pdo;


    // METHODE __CONSTRUCT
    public function __construct($lastname, $firstname, $birthdate, $phone, $mail){
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_birthdate = $birthdate;
        $this->_phone = $phone;
        $this->_mail = $mail;
        $this->_pdo = Database::connect();
      
    }
  
    public function create(){

        try {
            $sql = 'INSERT INTO `patients`
            (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
            VALUES
            (:lastname, :firstname, :birthdate, :phone, :mail)';
    
            $sth = $this->_pdo->prepare($sql);

            $sth->bindValue(':lastname', $this->_lastname, PDO::PARAM_STR);
            $sth->bindValue(':firstname', $this->_firstname, PDO::PARAM_STR);
            $sth->bindValue(':birthdate', $this->_birthdate, PDO::PARAM_STR);
            $sth->bindValue(':phone', $this->_phone, PDO::PARAM_STR);
            $sth->bindValue(':mail', $this->_mail, PDO::PARAM_STR);

            if(!$sth->execute()){
                return 'Message d\'erreur';
            }else{
                return true;
            }
        }catch(\PDOException $ex) {
            $errorMessage =  $ex->getMessage();
            return $errorMessage;
        }

    }
    
}