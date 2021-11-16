<?php
require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Appointment.php';

$id = intval(trim(filter_input(INPUT_GET, 'patient', FILTER_SANITIZE_NUMBER_INT)));

Appointment::delete($id);


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/list-appointment.php";
include dirname(__FILE__)."/../views/templates/footer.php";