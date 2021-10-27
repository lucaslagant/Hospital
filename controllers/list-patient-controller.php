<?php
require_once dirname(__FILE__).'/../utils/Database.php';
require_once dirname(__FILE__).'/../config/bdd.php';

$ex = 1;
$title = 'Liste de tout les patients';
$pdo = new PDO(DNS, USER, PASSWORD); 

try{
    $sql = 'SELECT `lastname`, `firstname` FROM `patients`';
    $sth = $pdo->query($sql);
    $patients = $sth->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $ex){
    die('La requête a retourné une erreur: '. $ex->getMessage());
}
   


// appel des fichiers
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/list-patient.php";
include dirname(__FILE__)."/../views/templates/footer.php";