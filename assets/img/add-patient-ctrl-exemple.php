<?php

include(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Patient.php');

$error = [];
$correctSignIn = [];
$errorMessage = 'test';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // NOM DE FAMILLE
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($lastname)){
        $error['lastname'] = 'Veuillez remplir ce champ';
    }else{
        $result_lastname = preg_match(REGEX_NAME_AND_NOUN, $lastname);
        if(!$result_lastname){
            $error['lastname'] = 'Nom invalide'; 
        }else{
            $correctSignUp['lastname'] = $lastname;
        }
    }

    // PRENOM
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($firstname)){
        
        $error['firstname'] = 'Veuillez remplir ce champ';
    }else{
        $result_firstname = preg_match(REGEX_NAME_AND_NOUN, $firstname);

        if(!$result_firstname){
            $error['firstname'] = 'Prénom invalide';
           
        }else{
            $correctSignUp['firstname'] = $firstname;
        }
    }

    // DATE DE NAISSANCE
    $birthdate = trim(filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_STRING));
    if(empty($birthdate)){
        $error['birthdate'] = 'Veuillez remplir ce champ';
    }else{
        $result_birthdate = preg_match(REGEX_NUMBER_AND_LETTER, $birthdate);

        if(!$result_birthdate){
            $error['birthdate'] = 'Date de naissance invalide';
        }else{
            $correctSignUp['birthdate'] = $birthdate;
        }
    } 

    //  N° de téléphone
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    if(empty($phone)){
        $error['phone'] = 'Veuillez remplir ce champ';
    }else{
        $result_phone = preg_match(REGEX_PHONE, $phone);

        if($result_phone){
            $success['phone'] = $phone;
        }else{
            $error['$phone'] = 'N° de téléphone invalide';
        }
    }

    // Email
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
    //$mail = filter_var('mail', FILTER_VALIDATE_EMAIL);
    $mail_confirmation = trim(filter_input(INPUT_POST, 'mail_confirmation', FILTER_SANITIZE_EMAIL));
    //$mail_confirmation = filter_var('mail_confirmation', FILTER_VALIDATE_EMAIL);
    if(empty($mail)){ 
        $error['mail'] = 'Veuillez remplir ce champ';
    }
    if(empty($mail_confirmation)){
        $error['mail_confirmation'] = 'Veuillez remplir ce champ';
    }

    if($mail != $mail_confirmation){
        $error['mail'] = 'Les deux champs d\'email ne sont pas identiques';
        $error['mail_confirmation'] = 'Les deux champs d\'email ne sont pas identiques';
    }else{
        $result_mail = preg_match(REGEX_EMAIL, $mail);
        $result_mail_confirmation = preg_match(REGEX_EMAIL, $mail_confirmation);
     
        if(!$result_mail){
            $error['mail'] = 'Email invalide';   
        }else{
            $correctSignUp['mail'] = $mail;
        }

        if(!$result_mail_confirmation){
            $error['mail_confirmation'] = 'Email invalide';   
        }
    }

    

    if(empty($error)){
        // ENREGISTREMENT EN BASE
        $patient = new Patient($lastname, $firstname, $birthdate, $phone, $mail);
        $response = $patient->create();
        if($response !== true){
            $customMessage = $response;
        }else{
            $customMessage = 'Vous avez bien été enregistré';
        }
    }
    //var_dump($error);
    //var_dump($patient);
  
}
 

require_once(dirname(__FILE__).'/../views/templates/header.php');

//if(!empty($error)){
    include(dirname(__FILE__).'/../views/forms/add-patient.php');
//}


require_once(dirname(__FILE__).'/../views/templates/footer.php');

?>
