<div class="text-center">
    <h1>Modifier un rendez-vous</h1>
    <form  class="addAppointment" action="" method="POST">
        <label for="dateHour">Indiquer la date et l'heure du rendez-vous</label>
        <p>
            <input
            type="datetime-local"
            name="dateHour"
            id="dateHour"
            value="<?= htmlentities($_POST['dateHour'] ?? '')?>"
            required
            >
        </p>
        <label for="idPatients">Indiquer le patient</label>
        <p>
            <select name="patient" id="patient">
            <?php foreach ($patients as $patient): 
              $selected = ($patient_id === $patient->id) ? 'selected' : '';
              
            ?>
              <option value="<?=$patient->id?>" <?=$selected?>><?=$patient->lastname?> <?=$patient->firstname?></option>
            <?php endforeach ?>
            </select>
        </p>
        <input type="submit" value="Valider">
    </form>
    
                
    
</div>