<?php
require_once dirname(__FILE__).'/../utils/Database.php';
require_once dirname(__FILE__).'/../config/bdd.php';

$ex = 1;
$title = 'Liste de tout les patients';
$pdo = new PDO(DNS, USER, PASSWORD); 

$ex = 1;
$title = 'Liste de tout les patients';

$infopatient = Patient::info(); 




// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/profil-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";