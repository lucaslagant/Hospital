<?php
// appel de la regex
require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Appointment.php');

// déclaration des variables
$error=[];
$verif = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dateHour = trim(filter_input(INPUT_POST,'dateHour', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_NUMBER,$dateHour)) {
        $error['dateHour'] = 'Date invalide' ;
    }
    $patient = trim(filter_input(INPUT_POST,'patient', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_NO_NUMBER,$patient)) {
        $error['patient'] = 'Patient invalide';
    }    
    if(empty($error)){
        $appointment = new Appointment($lastname, $firstname, $appointmentDate, $phone,);        
        // $response = $appointment->make($lastname);
        if($response !== true){
            $customMessage = $response;
        }else{
            $customMessage = 'Le rendez-vous a bien été enregistré';
        }
    }
}


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/add-appointment.php";
include dirname(__FILE__)."/../views/templates/footer.php";