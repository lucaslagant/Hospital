<div class="container">
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
                                    <td>'.$show->title.'</td>
                                    <td>'.$show->performer.'</td>
                                    <td>'.date('d.m.Y', strtotime($show->date)).'</td>
                                    <td>'.date('H:i', strtotime($show->startTime)).'</td>
                                </tr>';
                            }
                        ?>


            </tbody>
        </table>
    </div>
</div>