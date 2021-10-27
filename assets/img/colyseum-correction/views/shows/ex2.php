<div class="container">
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
                                    <td>'.$showType->type.'</td>
                                </tr>';
                            }
                        ?>


            </tbody>
        </table>
    </div>
</div>