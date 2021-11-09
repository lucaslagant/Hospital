<?php
require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Patient.php';
require_once dirname(__FILE__).'/../models/Appointment.php';

$ex = 1;
$title = 'Liste de tout les patients';

$patientArray= Patient::list();
$appointmentArray = Appointment::list();   


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/list-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";