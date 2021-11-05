<?php 
class Appointment
{
	private $_dateHour,
			$_idPatient,
			$_pdo;

	public function __construct($dateHour, $patient_id)
	{
		try 
		{
			$this->_pdo = Database::connect();
			$this->_dateHour = $dateHour;
			$this->_idPatient = $patient_id;
		}
		catch (\PDOException $ex)
		{
			return $ex;
		}
	}

	public function create()
	{
		// try 
		// {
		// 	if ($this->exist() === false)
		// 	{
		// 		$sth = $this->_pdo->prepare('INSERT INTO `appointments` (`dateHour`, `iPatients`) VALUES (:dateHour, :idPatients)');

		// 		$sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
		// 		$sth->bindValue(':idPatients', $this->_idPatient, PDO::PARAM_STR);

				
		// 		if (!$sth->execute()){
		// 			throw new PDOException('Erreur dans la matrice. Un incident est arrivé durant \'enregistrement');
		// 		}
		// 	}
		// 	else
		// 	{
		// 		return $this->exist();
		// 	}
		// }
		// catch (PDOException $ex) 
		// {
		// 	return $ex;
		// }
        try {
            $sql = 'INSERT INTO `Appointment`
            (`dateHour`, `idPatients`)
            VALUES
            (:dateHour, :idPatients);';
    
            $sth = $this->_pdo->prepare($sql);

            $sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
            $sth->bindValue(':idPatients', $this->_idPatient, PDO::PARAM_STR);           

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

	public function exist()
	{
		try 
		{
			$sth = $this->_pdo->prepare('SELECT * FROM `appointments` WHERE `dateHour` = :dateHour AND `idPatients` = :idPatients ;');

			$sth->bindValue(':dateHour', $this->_dateHour, PDO::PARAM_STR);
			$sth->bindValue(':idPatients', $this->_idPatient, PDO::PARAM_STR);

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

}
?>