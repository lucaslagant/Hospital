<div class="container">

    <div class="card-body">
        <!-- Afficher tous les clients comme ceci :
                    Nom : Nom de famille du client
                    Prénom : Prénom du client
                    Date de naissance : Date de naissance du client
                    Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
                    Numéro de carte : Numéro de la carte fidélité du client s'il en possède une. -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Carte de fidélité</th>
                    <th scope="col">Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                            $i=0;
                            foreach($allClientsFilteredByCard as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client->firstName.'</td>
                                    <td>'.$client->lastName.'</td>
                                    <td>'.date('d.m.Y', strtotime($client->birthDate)).'</td>
                                    <td>'.$client->fidelity.'</td>
                                    <td>'.$client->cardFidelity.'</td>
                                </tr>';
                            }
                        ?>


            </tbody>
        </table>
    </div>
</div>