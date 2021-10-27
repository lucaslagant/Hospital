<div class="container">

    <div id="accordion">

        <div class="card mb-3">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">Tous les clients</div>
                    <button class="btn btn-info" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Visualiser
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <!-- Tous les clients -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">BirthDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($allClients as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">$i</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.$client["birthDate"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        
        <div class="card mb-3">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2"> Tous les types de spectacles</div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Visualiser
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <!-- Tous les types de spectacles -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type de spectacle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($allShowTypes as $showType){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$showType["type"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">Afficher les 20 premiers clients.</div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        Visualiser
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <!-- Afficher les 20 premiers clients. -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Lirstname</th>
                                <th scope="col">BirthDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($first20Clients as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.$client["birthDate"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">Clients possédant une carte de fidélité.</div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                        aria-expanded="false" aria-controls="collapseFour">
                        Visualiser
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <!-- N'afficher que les clients possédant une carte de fidélité. -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">BirthDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($clientsWithCard as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.$client["birthDate"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">Noms et prénoms de tous les clients dont le nom commence
                        par la
                        lettre "M"</div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                        aria-expanded="false" aria-controls="collapseFive">
                        Afficher
                    </button>

                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <!-- Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M" -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Firstname</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($clientsStartM as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">
                        Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les
                        titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le
                        date à heure.
                    </div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                        aria-expanded="false" aria-controls="collapseSix">
                        Visualiser
                    </button>

                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <!-- Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure. -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre spectacle</th>
                                <th scope="col">Artiste</th>
                                <th scope="col">Date</th>
                                <th scope="col">Heure</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach($allShows as $show){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$show["title"].'</td>
                                    <td>'.$show["performer"].'</td>
                                    <td>'.$show["date"].'</td>
                                    <td>'.$show["startTime"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <div class="fst-italic fs-6 fw-normal mb-2">
                        Afficher tous les clients comme ceci :<br>
                        Nom : Nom de famille du client<br>
                        Prénom : Prénom du client<br>
                        Date de naissance : Date de naissance du client<br>
                        Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)<br>
                        Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.
                    </div>
                    <button class="btn btn-info collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                        aria-expanded="false" aria-controls="collapseSeven">
                        Visualiser
                    </button>


                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
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
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["birthDate"].'</td>
                                    <td>'.$client["card"].'</td>
                                    <td>'.$client["cardNumber"].'</td>
                                </tr>';
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>