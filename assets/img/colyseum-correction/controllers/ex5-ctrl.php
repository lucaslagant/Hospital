<?php
require_once dirname(__FILE__).'/../utils/database.php';

// Initialisation de variables utilisées dans le header
$ex = 5;
$title = 'Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Les afficher comme ceci :<br>
<br>
Nom : Nom du client<br>
<br>
Prénom : Prénom du client<br>
<br>
Trier les noms par ordre alphabétique.';

// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
// Les afficher comme ceci :
// Nom : Nom du client
// Prénom : Prénom du client
try{
    $sql = 'SELECT `lastName`, `firstName` FROM `clients` where `lastName`like "M%" ORDER BY `lastName`';
    $result = $pdo->query($sql);
    $clientsStartM = $result->fetchAll();
}catch(PDOException $e){
    echo 'La requête a retourné une erreur: '. $e->getMessage();
}


include dirname(__FILE__).'/../views/templates/header.php';

include dirname(__FILE__).'/../views/clients/ex5.php';

include dirname(__FILE__).'/../views/templates/footer.php';

