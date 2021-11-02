<?php
require_once(dirname(__FILE__) . '/../models/Patient.php');
require_once(dirname(__FILE__) . '/../models/Appointment.php');

// Nettoyage de l'id passé en GET dans l'url
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
/*************************************************************/

// Appel à la méthode statique permettant de récupérer toutes les infos d'un patient
$response = Patient::get($id);
/*************************************************************/

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}
/*************************************************************/

/* ************* AFFICHAGE DES VUES **************************/

include(dirname(__FILE__) . '/../views/templates/header.php');
    include(dirname(__FILE__) . '/../views/patients/display-patient.php');
include(dirname(__FILE__) . '/../views/templates/footer.php');

/*************************************************************/