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
            foreach ($patients as $patient) {
                $i++;
                echo '<tr>
                    <th scope="row">'.$i.'</th>                    
                    <td>'.$patient["lastname"].'</td>
                    <td>'.$patient["firstname"].'</td>
                    <td><a class="iconInfo" href=""><img src="https://img.icons8.com/color/48/000000/add-property.png"/>           
                    </tr>';
            }
        ?>
        
    </tbody>
</table>