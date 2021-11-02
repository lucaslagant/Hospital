<?php if(isset($message)) {?>
    
    <div class="alert alert-warning" role="alert">
        <?= nl2br($message)?>
    </div>

<?php } ?>

<!-- On peut ajouter un attribut 'novalidate' dans la balise form pour désactiver temporairement tous les required et pattern -->
<form class="row g-3 needs-validation" method="POST">

    <input type="hidden" value="<?= $id ?? '' ?>" class="form-control" id="id" name="id" />
    <div class="mb-4">
        <div class="form-outline">
            <input
                type="text"
                value="<?= $response->lastname ?? $lastname ?? '' ?>" 
                class="form-control" 
                id="lastname" 
                name="lastname" 
                required
                pattern="<?=REGEXP_STR_NO_NUMBER?>"
                />
            <label for="lastname" class="form-label">Nom</label>
            <div class="valid-feedback">Parfait!</div>
            <div class="invalid-feedback">Merci de choisir un nom valide.</div>
        </div>
        <div class="invalid-feedback-2"><?=$errorsArray['lastname_error'] ?? ''?></div>
    </div>
    <div class="mb-4">
        <div class="form-outline">
            <input 
                type="text" 
                value="<?= $response->firstname ?? $firstname ?? '' ?>" 
                class="form-control" 
                id="firstname" 
                required 
                name="firstname"  
                required
                pattern="<?=REGEXP_STR_NO_NUMBER?>"
                />
            <label for="firstname" class="form-label">Prénom</label>
            <div class="valid-feedback">Parfait!</div>
            <div class="invalid-feedback">Merci de choisir un prénom valide.</div>
        </div>
        <div class="invalid-feedback-2"><?=$errorsArray['firstname_error'] ?? ''?></div>
    </div>
    <div class="mb-4">
        <div class="input-group form-outline">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input 
                type="email"
                autocomplete="email"
                value="<?= $response->mail ?? $mail ?? '' ?>" 
                class="form-control" 
                id="mail" 
                name="mail" 
                required 
                />
            <label for="mail" class="form-label">Email</label>
            <div class="valid-feedback">Parfait!</div>
            <div class="invalid-feedback">Merci de choisir un email valide.</div>
        </div>
        <div class="invalid-feedback-2"><?=$errorsArray['mail_error'] ?? ''?></div>
    </div>
    <div class="mb-4">
        <div class="form-outline">
            <input 
                type="date" 
                value="<?= $response->birthdate ?? $birthdate ?? '' ?>" 
                class="form-control" 
                id="birthdate" 
                name="birthdate" 
                required
                />
            <div class="valid-feedback">Parfait!</div>
            <div class="invalid-feedback">Merci de choisir une date de naissance valide.</div>
        </div>
        <div class="invalid-feedback-2"><?=$errorsArray['birthdate_error'] ?? ''?></div>
    </div>
    <div class="mb-4">
        <div class="form-outline">
            <input 
                type="text" 
                value="<?= $response->phone ?? $phone ?? '' ?>" 
                class="form-control" 
                id="phone" 
                name="phone" 
                pattern="<?=REGEXP_PHONE?>"
            />
            <label for="phone" class="form-label">Téléphone</label>
            <div class="valid-feedback">Parfait!</div>
            <div class="invalid-feedback">Merci de choisir un numéro de téléphone valide.</div>
        </div>
        <div class="invalid-feedback-2"><?=$errorsArray['phone_error'] ?? ''?></div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Enregistrer le patient</button>
    </div>
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>