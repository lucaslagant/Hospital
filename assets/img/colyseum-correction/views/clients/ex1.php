<div class="container">

    <div class="card mb-3">


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
                            foreach($clients as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.date('d.m.Y', strtotime($client["birthDate"])).'</td>
                                </tr>';
                            }
                        ?>


                </tbody>
            </table>

        </div>
    </div>

</div>