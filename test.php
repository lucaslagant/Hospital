$id = intval(trim(filter_input(INPUT_GET, 'appointments', FILTER_SANITIZE_NUMBER_INT)));

$patients = Patient::list();
	$patient_id = 0;
    $dateHour = 0;



       



		if (empty($errors)) {		

			if ($dateHour >= date('Y-m-d\TH:i')) {

				$appointment = new Appointment($dateHour, $patient_id);				                                
				$modify_appointment = $appointment->modify($id);																																								                                                                            
				if ($modify_appointment instanceof PDOException) {					
					$code = $modify_appointment->getCode();									
					$returned_message = ERRORS_ARRAY[$code];

				} else {
					$returned_message = 'Le rendez-vous a bien été enregistré.';											
				}
			} else {
				$returned_message = 'Il est impossible de modifier un rendez-vous à une date inférieure à celle du jour.';
			} 
		} 
	}
    $appointments = Appointment::modify($id);
    if(!is_object($appointments)){
    $messError = $appointments;
    }
