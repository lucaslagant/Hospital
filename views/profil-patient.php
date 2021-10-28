<div>
    <?php
       foreach ($patients as $patient) {
           echo '<div>'.$patient["lastname"].'</div>';
                '<div>'.$patient["firstname"].'</div>';
                '<div>'.date('d.m.Y' , strtotime($client["birthDate"])).'</div>';
                '<div>'.$patient["phone"].'</div>';
                '<div>'.$patient["mail"].'</div>';

       } 
    ?>
</div>