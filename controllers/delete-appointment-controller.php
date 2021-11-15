<?php
require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Appointment.php';

$appointmentDelete= Appointment::delete($id);


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/list-appointment.php";
include dirname(__FILE__)."/../views/templates/footer.php";