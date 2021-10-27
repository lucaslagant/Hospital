<?php
// appel de la regex
require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Patient.php');

// déclaration des variables
$error=[];
$verif = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = trim(filter_input(INPUT_POST,'lastname', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_NO_NUMBER,$lastname)) {
        $error['lastname'] = 'Nom invalide' ;
    }
    $firstname = trim(filter_input(INPUT_POST,'firstname', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_NO_NUMBER,$firstname)) {
        $error['lastname'] = 'Prénom invalide';
    }
    $birthDate = trim(filter_input(INPUT_POST,'birthDate', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_NUMBER,$birthDate)) {
        $error['birthDate'] = 'Date invalide';
    }
    $mail = trim(filter_input(INPUT_POST,'mail',FILTER_SANITIZE_EMAIL));
    if (!preg_match(REGEX_EMAIL,$mail)) {
        $error['mail'] = 'mail invalide';
    }
    $phone = trim(filter_input(INPUT_POST,'phone', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_PHONE,$phone)) {
        $error['phone'] = 'Nuéméro de téléphone invalide';
    }
    if(empty($error)){
        $patient = new Patient($lastname, $firstname, $birthDate, $phone, $mail);        
        $response = $patient->create();
        if($response !== true){
            $customMessage = $response;
        }else{
            $customMessage = 'Vous avez bien été enregistré';
        }
    }
}



// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/add-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";  