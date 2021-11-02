<?php if(isset($message)) {?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($message)?>
    </div>

<?php } else { ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php 
        $i=0;
        foreach($response as $patient) {
            $i++;
            ?>
            <tr>
                <th scope="row"><?=$patient->id?></th>
                <td><?=htmlentities($patient->firstname)?></td>
                <td><?=htmlentities($patient->lastname)?></td>
                <td><?=htmlentities($patient->birthdate)?></td>
                <td><a href="mailto:<?=htmlentities($patient->mail)?>"><?=htmlentities($patient->mail)?></a></td>
                <td>
                    <a href="/controllers/display-patientCtrl.php?id=<?=htmlentities($patient->id)?>"><i
                            class="far fa-edit"></i></a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>

<?php } ?>