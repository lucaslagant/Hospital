<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 2;
$title = 'Afficher tous les types de spectacles possibles.';

// Afficher tous les types de spectacles possibles.
try{
    $sql = 'SELECT `type` FROM `showtypes`';
    $result = $pdo->query($sql);
    $allShowTypes = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}



include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/shows/ex2.php';

include dirname(__FILE__).'/../views/templates/footer.php';
