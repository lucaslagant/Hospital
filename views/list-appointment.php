<table class="tableau-style">
    <thead>
        <tr>
            <th>Nom, Prénom</th>
            <th>Date du RDV</th>
            <th>Heure du RDV</th>
            <th>N° de Tél</th>
            <th>Modifer les rendez-vous</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;            
            foreach ($appointmentArray as $appointment) {
                $i++;?>                
                <tr>
                    <td><?=$appointment->lastname . ' ' . $appointment->firstname?></td>
                    <td><?=$appointment->dateAppointment ?></td>
                    <td><?=$appointment->hourAppointment ?></td>
                    <td><a href="tel:'<?= $appointment->phone ?>"><?= $appointment->phone ?></a></td>
                    <td><a href="<?="/controllers/modify-appointment-controller.php?patient='.$patient->id.'"?>"><button>Modifier le rendez-vous du patient</button></a></td>
                </tr>
    <?php   }?>  

        
        
    </tbody>
</table>
