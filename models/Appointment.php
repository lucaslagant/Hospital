<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

class Appointment
{
	private $_dateHour,
			$_idPatients,
			$_pdo;

	public function __construct($dateHour, $patient_id)
	{
		try 
		{
			$this->_pdo = Database::connect();
			$this->_dateHour = $dateHour;
			$this->_idPatients = $patient_id;
		}
		catch (\PDOException $ex)
		{
			return $ex;
		}
	}

	public function create()
	{		
        try {
            $sql = 'INSERT INTO `appointments`
            (`dateHour`, `idPatients`)
            VALUES
            (:dateHour, :idPatients);';
    
            $sth = $this->_pdo->prepare($sql);

            $sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
            $sth->bindValue(':idPatients', $this->_idPatients, PDO::PARAM_INT);           

            if(!$sth->execute()){											
                throw new PDOException('Message d\'erreur');								
            }else{
                return true;
            }
        }catch(\PDOException $ex) {					
            $errorMessage =  $ex->getMessage();
            return $errorMessage;
        }
	}

	public function exist()
	{
		try 
		{
			$sth = $this->_pdo->prepare('SELECT * FROM `appointments` WHERE `dateHour` = :dateHour AND `idPatients` = :idPatients ;');

			$sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
			$sth->bindValue(':idPatients', $this->_idPatients, PDO::PARAM_STR);

			if ($sth->execute())
			{
				$result_fetch = $sth->fetch();
				if ($result_fetch){
					throw new PDOException('Les informations fournies correspondent à un rendez-vous existant.');

				} else {
					return false;					
				}
			} else {
				throw new PDOException('Erreur dans la matrice. Un incident est arrivé durant la vérification des données.');
			}	
		}
		catch (PDOException $ex) 
		{
			return $ex;
		}
	}
	public static function list(){
		$pdo= Database::connect();

        try{
            $sql = 'SELECT `patients`.`firstname`,
                 `patients`.`lastname`, `patients`.`phone`,
                  DATE_FORMAT(`appointments`.`dateHour`,\'%d-%m-%Y\') as `dateAppointment`,
                DATE_FORMAT(`appointments`.`dateHour`,\'%k:%i\') as `hourAppointment`,
                   `appointments`.`id` as `idAppointment`,
                  `appointments`.`idPatients` 
                 FROM `appointments` 
                INNER JOIN `patients` ON `patients`.`id`=`appointments`.`idPatients`;';
            $sth = $pdo->query($sql);
            $appointments = $sth->fetchAll();
            return $appointments;
        }catch(PDOException $ex){
            die('La requête a retourné une erreur: '. $ex->getMessage());
        }		
	}
	public static function info($id){
        
        $sql = 'SELECT * FROM `appointments` WHERE `id`= :id ;';
        $pdo = Database::connect();
        try {
            $sth = $pdo->prepare($sql);

            $sth->bindValue(':id', $id, PDO::PARAM_INT);

            if($sth->execute()){
                $appointment = $sth->fetch();             
              
                if($appointment){
                    return $appointment;
                }else{
                    return 'n\'existe pas';
                }
            }
        }
        catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
	public function modify($id){
        
        $sql = 'UPDATE `appointments` 
        SET `dateHour`= :dateHour , `idPatients`= :idPatients
        WHERE `appointments`.`id` = :id ;';
        try {
            $pdo = Database::connect();
            $sth = $pdo->prepare($sql);

            $sth->bindValue(':id', $id, PDO::PARAM_INT);
            $sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
            $sth->bindValue(':idPatients', $this->_idPatients, PDO::PARAM_INT);            

            return $sth->execute();
            
        }
        catch (\PDOException $ex) {
            return $ex->getMessage();
        }
        
    }
    public static function delete($id){

        $sql = 'DELETE FROM `appointments` WHERE `id`= :id ;';

        $pdo = Database::connect();
        try {
            $sth = $pdo->prepare($sql);

            $sth->bindValue(':id', $id, PDO::PARAM_INT);

            if($sth->execute()){
                $appointment = $sth->rowCount();            
              
                if($appointment){
                    return $appointment;
                }else{
                    return 'n\'existe pas';
                }
            }
        }
        catch (\PDOException $e) {
            return $e->getMessage();
        }
    }   


}
?>