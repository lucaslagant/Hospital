<?php

require_once(dirname(__FILE__).'/../utils/database.php');

class Patient{

    private $_firstname;
    private $_lastname;
    private $_birthdate;
    private $_phone;
    private $_mail;
    
    private $_pdo;

    
    /**
     * Méthode magique qui permet d'hydrater notre objet 'patient'
     * 
     * @return boolean
     */
    public function __construct($lastname=NULL, $firstname=NULL, $birthdate=NULL, $phone=NULL, $mail=NULL){
        
        // Hydratation de l'objet contenant la connexion à la BDD
        
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_birthdate = $birthdate;
        $this->_phone = $phone;
        $this->_mail = $mail;
        
        try{
            $this->_pdo = Database::getInstance();
        } catch(PDOException $ex){
            return $ex;
        }
    }


    /**
     * Méthode qui permet de créer un patient
     * 
     * @return int
     */
    
    public function create(){

        try{
            if(!$this->isExist($this->_mail)){

                    $sql = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`) 
                            VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

                    $sth = $this->_pdo->prepare($sql);
                    $sth->bindValue(':lastname',$this->_lastname,PDO::PARAM_STR);
                    $sth->bindValue(':firstname',$this->_firstname,PDO::PARAM_STR);
                    $sth->bindValue(':birthdate',$this->_birthdate,PDO::PARAM_STR);
                    $sth->bindValue(':phone',$this->_phone,PDO::PARAM_STR);
                    $sth->bindValue(':mail',$this->_mail,PDO::PARAM_STR);
                    $result = $sth->execute();

                    if($result === false){
                        throw new PDOException(ERR_CREATE_PATIENT_NOTOK);
                    }
                
            } else {
                throw new PDOException(ERR_PATIENTEXIST);
            }
        } catch(PDOException $ex){
            return $ex;
        }

    }

    
    /**
     * Méthode permettant de savoir si un mail existe
     * 
     */
    public static function isExist($mail){
        try{
            $pdo = Database::getInstance();
            $sql = 'SELECT `mail` FROM `patients` 
                    WHERE `mail` = :mail';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':mail',$mail,PDO::PARAM_STR);
            $sth->execute();
            $result = $sth->fetchColumn();
            if($result){
                return true;
            }
        }
        catch(PDOException $ex){
            throw new PDOException($ex);
        }

    }

    /**
     * Méthode qui permet de lister tous les patients existants
     * 
     * @return array
     */
    public static function getAll(){
        
        try{
            $pdo = Database::getInstance();

            $sql = 'SELECT * FROM `patients`';

            $sth = $pdo->query($sql);
            $result = $sth->fetchAll();

            return $result;
        }
        catch(PDOException $ex){
            return $ex;
        }

    }



    public static function get($id){

        try {
            $pdo = Database::getInstance();
            $sql = 'SELECT * FROM patients WHERE `id` = :id';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id', $id, PDO::PARAM_INT);

            $result = $sth->execute();
            if($result){
                $patient = $sth->fetch();
                if($patient){
                    return $patient;
                } else {
                    //Patient non trouvé
                    throw new PDOException('Patient non trouvé');
                }
            } else {
                //Erreur générale
                throw new PDOException('Erreur d\'exécution de la requête');
            }

        } catch (\PDOException $ex) {
            return $ex;
        }



        




        die;

    }





























    /**
     * Méthode qui permet de récupérer le profil d'un patient
     * 
     * @return object
     */
    // public static function get($id){
    //     try{
    //         $pdo = Database::getInstance();

    //         $sql = 'SELECT * FROM `patients` WHERE `id` = :id';

    //         $sth = $pdo->prepare($sql);
    //         $sth->bindValue(':id', $id, PDO::PARAM_INT);
    //         $sth->execute();
    //         $result = $sth->fetch();
            
    //         if($result === false){
    //             throw new PDOException(ERR_PATIENT_NOT_FOUND);
    //         }

    //         return $result;
    //     }
    //     catch(PDOException $ex){
    //         return $ex;
    //     }

    //}

    /**
     * Méthode qui permet de mettre à jour un patient
     * 
     * @return boolean
     */
    public function update($id){
        try{
            // On vérifie si le mail n'existe pas en base ou que ça n'est pas déjà le mail du patient que l'on modifie
            if(!$this->isExist($this->_mail) || $this->_mail==$this->get($id)->mail){
               
                $sql = 'UPDATE `patients` SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phone, `mail` = :mail
                        WHERE `id` = :id';

                $sth = $this->_pdo->prepare($sql);
                $sth->bindValue(':lastname',$this->_lastname,PDO::PARAM_STR);
                $sth->bindValue(':firstname',$this->_firstname,PDO::PARAM_STR);
                $sth->bindValue(':birthdate',$this->_birthdate,PDO::PARAM_STR);
                $sth->bindValue(':phone',$this->_phone,PDO::PARAM_STR);
                $sth->bindValue(':mail',$this->_mail,PDO::PARAM_STR);
                $sth->bindValue(':id',$id,PDO::PARAM_INT);
                $result = $sth->execute();

                if($result === false){
                    throw new PDOException(ERR_UPDATE_PATIENT_NOTOK);
                }
                
            } else {
                throw new PDOException(ERR_PATIENTEXIST);
            }
        } catch(PDOException $ex){
            return $ex;
        }
    }

    

}