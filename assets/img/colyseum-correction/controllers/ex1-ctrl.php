<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 1;
$title = 'Exécuter le script colyseum.sql fourni avant de commencer.<br>Tous les résultats devront être affichés dans une page index.php.
<br><br>
Afficher tous les clients.';

try{
    // Requête permettant de récupérer tous les clients.
    $sql = 'SELECT `lastName`, `firstName`, `birthDate` FROM `clients`';
    $sth = $pdo->query($sql);
    $clients = $sth->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur: '. $e->getMessage());
}


include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/clients/ex1.php';

include dirname(__FILE__).'/../views/templates/footer.php';
