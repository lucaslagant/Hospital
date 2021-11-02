<?php

define('DSN', 'mysql:host=localhost;dbname=dwwm_hospitale2n');
define('LOGIN', 'root');
define('PASSWORD', '');


// Définition des constantes retournées par les méthodes
define('ERR_UNKNOWN', 'Une erreur inconnue s\'est produite'); 

define('ERR_DATABASE', 'Problème de connexion à la base de données');
define('ERR_PDO', 'Une erreur SQL s\'est produite');

define('MSG_CREATE_PATIENT_OK', 'Le patient a bien été ajouté');
define('ERR_CREATE_PATIENT_NOTOK', 'Le patient n\'a pas été enregistré en base de données');
define('ERR_PATIENTEXIST', 'Le patient existe déjà');
define('ERR_PATIENT_NOT_FOUND', 'Le patient n\'a pas été trouvé');
define('MSG_UPDATE_PATIENT_OK', 'Le patient a bien été mis à jour');
define('ERR_UPDATE_PATIENT_NOTOK', 'Le patient n\'a pas été mis à jour');
