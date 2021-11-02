<?php
require_once(dirname(__FILE__) . '/../models/Patient.php');

// Appel à la méthode statique permettant de récupérer tous les patients
$response = Patient::getAll();
/*************************************************************/

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}
/*************************************************************/

/* ************* AFFICHAGE DES VUES **************************/

include(dirname(__FILE__) . '/../views/templates/header.php');
    include(dirname(__FILE__) . '/../views/patients/list-patients.php');
include(dirname(__FILE__) . '/../views/templates/footer.php');

/*************************************************************/