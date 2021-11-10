<?php
// require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Appointment.php';
require_once dirname(__FILE__) . '/../models/Patient.php';
require_once dirname(__FILE__) . '/../utils/regex.php';


$id = intval(trim(filter_input(INPUT_GET, 'appointment', FILTER_SANITIZE_NUMBER_INT)));

$patients = Patient::list();

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
		$appointment = new Appointment($dateHour, $patient_id);
		$result = $appointment->modify($id);	
		
	}
	
}
$appointment = Appointment::info($id);
$patient_id = $appointment->idPatients;
$dateHour =date('Y-m-d\TH:i',strtotime($appointment->dateHour));









   


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/update-appointment.php";
include dirname(__FILE__)."/../views/templates/footer.php";