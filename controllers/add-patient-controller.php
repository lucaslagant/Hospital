<?php
// appel de la regex
require_once(dirname(__FILE__).'/../utils/regex.php');

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
    $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL));
    if (!preg_match(REGEX_EMAIL,$email)) {
        $error['email'] = 'Email invalide';
    }
    $phone = trim(filter_input(INPUT_POST,'phone', FILTER_SANITIZE_STRING));
    if (!preg_match(REGEX_PHONE,$phone)) {
        $error['phone'] = 'Nuéméro de téléphone invalide';
    }
}

// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/add-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";