<div class="col-12 d-flex justify-content-center">
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" class="d-flex mt-2">
        <input class="form-control me-2" name="keyword" type="search" placeholder="Rechercher" aria-label="Rechercher">
        <button class="btn btn-outline-success" type="submit">Go</button>
    </form>
</div> 
<table class="tableau-style">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Plus d'information</th>          
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;            
            foreach ($patientArray as $patient) {
                $i++;                
                echo '<tr>
                    <td>'.$patient->id.'</td>                 
                    <td>'.$patient->lastname.'</td>
                    <td>'.$patient->firstname.'</td>
                    <td><a class="iconInfo" href="/controllers/profil-patient-controller.php?patient='.$patient->id.'"><img src="https://img.icons8.com/color/48/000000/add-property.png"/>           
                    </tr>';
            }
        ?>
        
    </tbody>
</table>