<?php
require_once dirname(__FILE__).'/../config/bdd.php';
require_once dirname(__FILE__).'/../models/Appointment.php';

$ex = 1;
$title = 'Liste de tout les rendez-vous';

$appointmentArray= Appointment::list();

   


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/list-appointment.php";
include dirname(__FILE__)."/../views/templates/footer.php";