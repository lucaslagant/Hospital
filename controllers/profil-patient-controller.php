<?php
require_once dirname(__FILE__).'/../utils/Database.php';
require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Patient.php';
require_once dirname(__FILE__).'/../models/Appointment.php';

$id = intval(trim(filter_input(INPUT_GET, 'patient', FILTER_SANITIZE_NUMBER_INT)));

$patient = Patient::info($id);
if(!is_object($patient)){
    $messError = $patient;
}
$appointment = Appointment::info($id);
if (!is_object($appointment)) {
    $messError = $appointment;
}


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/profil-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";