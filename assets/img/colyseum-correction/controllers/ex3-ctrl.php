<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 3;
$title = 'Afficher les 20 premiers clients.';

// Afficher les 20 premiers clients.
try{
    $sql = 'SELECT `lastName`, `firstName`, `birthDate` FROM `clients` limit 20';
    $result = $pdo->query($sql);
    $first20Clients = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}



include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/clients/ex3.php';

include dirname(__FILE__).'/../views/templates/footer.php';
