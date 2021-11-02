<?php

require_once(dirname(__FILE__) . '/../models/Patient.php');

$response = Patient::get(5456);

if($response instanceof PDOException){
    $message = $response->getMessage();
    var_dump($response);
} else {
    $patient = $response;
    var_dump($patient);
}






?>