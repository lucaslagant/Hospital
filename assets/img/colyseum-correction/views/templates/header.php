<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chargement via un CDN, mais en PROD on utiliser plutot des ressources locales téléchargées dans /assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>La Manu - L'école des métiers du numérique</title>
</head>

<body>

    <div class="container-fluid bg-manu p-0">
        <div class="alert-transparent" role="alert">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
                <h1 class="text-center">PDO - Lire des données</h1>

                <div class="blur label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice <?=$ex ?? ''?></span></h2>
                    <div class='m-3'><?=$title ?? ''?></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==1) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex1-ctrl.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==2) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex2-ctrl.php">Exercice 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==3) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex3-ctrl.php">Exercice 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==4) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex4-ctrl.php">Exercice 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==5) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex5-ctrl.php">Exercice 5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==6) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex6-ctrl.php">Exercice 6</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (isset($ex) && $ex==7) ? 'active' : '' ?>" aria-current="page" href="/controllers/ex7-ctrl.php">Exercice 7</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">