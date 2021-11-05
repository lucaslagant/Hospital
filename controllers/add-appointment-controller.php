<?php 
require_once dirname(__FILE__) . '/../utils/regex.php';
require_once dirname(__FILE__) . '/../models/Patient.php';
require_once dirname(__FILE__) . '/../models/Appointment.php';
require_once dirname(__FILE__) . '/../utils/errors.php';

	
	$patients = Patient::list();
	$patient_id = 0;
    $dateHour = 0;


	$errors = [];
	$valid = null;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) 
	{	
        
        $patient_id = intval(trim(filter_input(INPUT_POST , 'patient' ,FILTER_SANITIZE_NUMBER_INT)));        
		if ($patient_id){
			if (!preg_match(REGEX_NUMBER, $patient_id))
				$errors['patientError'] = 'Saisie du patient invalide';
		} else {
			$errors['patientError'] = 'Veuillez saisir le patient';
		}        
        $dateHour = trim(filter_input(INPUT_POST , 'dateHour' ,FILTER_SANITIZE_STRING));
        if ($dateHour) {
            if (!preg_match(REGEX_DATE, $dateHour)) {
                $errors['dateHour'] = 'Saisie de la date et/ou de l\'heure invalide';
            }
        }else {
            $errors['dateHour'] = 'La date n\'est pas remplie';
        }
       



		if (empty($errors)) {		

			if ($dateHour >= date('Y-m-d')) {

				$dateHour = "$dateHour:00:00";                

				$appointment = new Appointment($dateHour, $patient_id);                                
				$created_appointment = $appointment->create();                                                                             
				if ($created_appointment instanceof PDOException) {
					$code = $created_appointment->getCode();
					$returned_message = ERRORS_ARRAY[$code];

				} else {
					$returned_message = 'Le rendez-vous a bien été enregistré.';					
				}
			} else {
				$returned_message = 'Il est impossible d\'enregistrer un rendez-vous à une date inférieure à celle du jour.';
			} 
		} 
	} 


include dirname(__FILE__) . '/../views/templates/header.php';
include dirname(__FILE__) . '/../views/add-appointment.php';
include dirname(__FILE__) . '/../views/templates/footer.php';