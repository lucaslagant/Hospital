<table class="tableau-style">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom, Prénom</th>
            <th>Date du RDV</th>
            <th>Heure du RDV</th>
            <th>N° de Tél</th>
            <th>Modifer les rendez-vous</th>
            <th>Supprimer un rendez vous</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;            
            foreach ($appointmentArray as $appointment) {                                               
                $i++;?>                
                <tr>
                    <td><?=$appointment->idPatients?></td>
                    <td><?=$appointment->lastname . ' ' . $appointment->firstname?></td>
                    <td><?=$appointment->dateAppointment ?></td>
                    <td><?=$appointment->hourAppointment ?></td>
                    <td><a href="tel:'<?= $appointment->phone ?>"><?= $appointment->phone ?></a></td>
                    <td><a href="/controllers/update-appointment-controller.php?appointment=<?=$appointment->idAppointment?>"><button>Modifier le rendez-vous du patient</button></a></td>
                    <td><a href="/controllers/delete-appointment-controller.php?appointment=<?=$appointment->idAppointment?>"></a><img src="https://img.icons8.com/cute-clipart/64/000000/delete-property.png"/></td>

                </tr>
    <?php   }?>  

        
        
    </tbody>
</table>
