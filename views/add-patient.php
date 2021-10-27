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
            placeholder="Nom"
            required
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
            placeholder="Prénom"
            required
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
            required            
            >
        </p>
        <p><?=$error['birthDate'] ?? null?></p>

        <label for="mail">Entrée le mail du patient :</label>
        <p>
            <input
            type="mail"
            name="mail"
            id="mail"
            value="<?=$mail ?? ""?>"
            placeholder="Mail"
            required
            >
        </p>
        <p><?=$error['mail'] ?? null?></p>
        <label for="phone">Entrée le numéro de téléphone du patient :</label>
        <p>
            <input
            type="tel"
            name="phone"
            id="phone"
            value="<?=$phone ?? ""?>"
            placeholder="+33"
            required
            >
        </p>
        <p><?=$error['phone'] ?? null?></p>      
        <input type="submit" value="Valider">
                
    </form>
</div>