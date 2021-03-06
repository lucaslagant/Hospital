<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

class Patient{

    // private $_id;
    private $_lastname;
    private $_firstname;
    private $_birthdate;
    private $_phone;
    private $_mail;
    private $_pdo;


    public function __construct($lastname='', $firstname='', $birthdate='', $phone='', $mail=''){
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
            (:lastname, :firstname, :birthdate, :phone, :mail);';
    
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

    public static function list(){    
       
        $pdo= Database::connect();

        try{
            $sql = 'SELECT  `id`, `lastname`, `firstname` FROM `patients` ;';
            $sth = $pdo->query($sql);
            $patients = $sth->fetchAll();
            return $patients;
        }catch(PDOException $ex){
            die('La requête a retourné une erreur: '. $ex->getMessage());
        }
    }

    public static function info($id){
        
        $sql = 'SELECT * FROM `patients` WHERE `id`= :id ;';
        $pdo = Database::connect();
        try {
            $sth = $pdo->prepare($sql);

            $sth->bindValue(':id', $id, PDO::PARAM_INT);

            if($sth->execute()){
                $patient = $sth->fetch();
                if($patient){
                    return $patient;
                }else{
                    return 'n\'existe pas';
                }
            }
        }
        catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function modify($id){
        
        $sql = 'UPDATE `patients` SET `lastname`= :lastname, `firstname`= :firstname, `birthdate`= :birthdate, `phone`= :phone, `mail`= :mail WHERE `id`= :id ;';
        try {
            $pdo = Database::connect();
            $sth = $pdo->prepare($sql);

            $sth->bindValue(':id', $id, PDO::PARAM_INT);            
        }
        catch (\PDOException $ex) {
            return $ex->getMessage();
        }
        
    }
    public static function readPatientsList($keyword=''){    

    
        $sql = 'SELECT patients.id, patients.lastname, patients.firstname
                FROM patients
                WHERE patients.lastname LIKE :keyword
                OR patients.firstname
                LIKE :keyword;';                
    
  
        try{
            $pdo = Database::connect();

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR);
        
            $sth->execute();
        

            $patientsList = $sth->fetchAll();
            return $patientsList;

        }catch(\PDOException $ex){
            return $ex->getMessage();
        }
}  
    
}