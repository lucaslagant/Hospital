<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 6;
$title = 'Afficher le titre de tous les spectacles ainsi que l\'artiste, la date et l\'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.';

// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
try{
    $sql = 'SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`';
    $result = $pdo->query($sql);
    $allShows = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}


include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/shows/ex6.php';

include dirname(__FILE__).'/../views/templates/footer.php';

