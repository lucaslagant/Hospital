<table class="tableau-style">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>phone</th>
            <th>mail</th>         
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $patient->id; ?></td>
            <td><?= $patient->firstname; ?></td>
            <td><?= $patient->lastname; ?></td>
            <td><?= $patient->birthdate; ?></td>
            <td><?= $patient->phone; ?></td>
            <td><?= $patient->mail; ?></td>
            
        </tr>     
    </tbody>
</table>
<div class="modifpatient">
<a href="<?="/controllers/updatePatientController.php=.$patient->id" ?>"><button>Modifier les informations du patient</button></a>
</div>
