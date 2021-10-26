<div class="text-center">
    <h1>Ajouter un patient</h1>
    <form action="" method="POST">
        <label for="lastname">Entrée le nom du patient :</label>
        <p>
            <input
            type="text"
            name="lastname"
            id="lastname"
            value="<?=$lastname ?? ""?>"
            pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '\-]+$"
            >
        </p>
        <p><?=$error['lastname'] ?? null?></p>
        <label for="firstname">Entrée le prénom du patient :</label>
        <p>
            <input
            type="text"
            name="firstname"
            id="firstname"
            value="<?=$firstname ??""?>"
            pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '\-]+$"
            >
        </p>
        <p><?=$error['firstname'] ?? null?></p>
        <label for="firstname">Entrée la date de naissance du patient :</label>
        <p>
            <input
            type="date"
            name="birthDate"
            id="birthDate"
            value="<?=$birthDate ?? ""?>"
            >
        </p>
        <p><?=$error['birthDate'] ?? null?></p>

        <label for="email">Entrée le mail du patient :</label>
        <p>
            <input
            type="email"
            name="email"
            id="email"
            value="<?=$email ?? ""?>"
            >
        </p>
        <p><?=$error['email'] ?? null?></p>
        <label for="phone">Entrée le numéro de téléphone du patient :</label>
        <p>
            <input
            type="tel"
            name="phone"
            id="phone"
            value="<?=$phone ?? ""?>"
            >
        </p>
        <p><?=$error['phone'] ?? null?></p>      
        <input type="submit" value="Validé">
        
    </form>
</div>