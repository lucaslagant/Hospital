 <?php

require_once(dirname(__FILE__).'/../models/Patient.php');

$keyword = trim(filter_input(INPUT_GET, 'keyword', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    
$allPatientsList = Patient::readPatientsList($keyword);
$patientArray= Patient::list();


require_once(dirname(__FILE__).'/../views/templates/header.php');

include(dirname(__FILE__).'/../views/list-patient.php');

require_once(dirname(__FILE__).'/../views/templates/footer.php');

?> 