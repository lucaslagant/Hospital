<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 4;
$title = 'N\'afficher que les clients possédant une carte de fidélité.';

// N'afficher que les clients possédant une carte de fidélité.
try{
    $sql = 'SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate` FROM clients 
    INNER JOIN cards ON `cards`.`cardNumber` = `clients`.`cardNumber` 
    WHERE `cards`.`cardTypesId` = 1';
    $result = $pdo->query($sql);
    $clientsWithCard = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}


include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/clients/ex4.php';

include dirname(__FILE__).'/../views/templates/footer.php';

