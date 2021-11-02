<?php if(isset($message)) {?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($message)?>
    </div>

<?php } else { ?>

    <div class="card">
        <div class="card-header"><?=htmlentities($response->firstname)?> <?=htmlentities($response->lastname)?></div>
        <div class="card-body">
            <h5 class="card-title"><?=htmlentities($response->birthdate)?></h5>
            <p class="card-text">
                <?=htmlentities($response->mail)?> (<?=htmlentities($response->phone)?>)
            </p>
            <a href="/controllers/edit-patientCtrl.php?id=<?=htmlentities($response->id)?>"
                class="btn btn-primary">Modifier</a>
        </div>
    </div>

<?php } ?>