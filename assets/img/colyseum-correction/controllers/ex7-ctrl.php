<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 7;
$title = '  Afficher tous les clients comme ceci :
            <br>
            Nom : Nom de famille du client
            <br>
            Prénom : Prénom du client
            <br>
            Date de naissance : Date de naissance du client
            <br>
            Carte de fidélité : Oui (Si le client en possède une) ou Non (s\'il n\'en possède pas)
            <br>
            Numéro de carte : Numéro de la carte fidélité du client s\'il en possède une.';

// Afficher tous les clients comme ceci :
// Nom : Nom de famille du client
// Prénom : Prénom du client
// Date de naissance : Date de naissance du client
// Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
// Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.
try{
    $sql = 'SELECT 
            `clients`.`lastName`,
            `clients`.`firstName`,
            DATE_FORMAT(`clients`.`birthDate`, "%d %b %Y") as `birthDate`,
            IF( `cards`.`cardTypesId`= 1 ,\'oui\',\'non\') as `fidelity`,
            IF(`cards`.`cardTypesId`= 1,`clients`.`cardNumber`,\'Aucun\') as `cardFidelity`
            FROM `clients`
            LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`;
            ';
    $result = $pdo->query($sql);
    $allClientsFilteredByCard = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}


include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/clients/ex7.php';

include dirname(__FILE__).'/../views/templates/footer.php';

