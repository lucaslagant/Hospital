<div class="container">
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
                                    <td>'.$client->lastName.'</td>
                                    <td>'.$client->firstName.'</td>
                                </tr>';
                            }
                        ?>


            </tbody>
        </table>
    </div>
</div>