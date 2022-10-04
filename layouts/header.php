<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="diététique, cabinet, heyrieux, santé, nutrition, soin de soi, rééquilibrage alimentaire, nutrition clinique, ateliers culinaires, cours de diététique">
        <title><?= $title ?? 'Mon super Site'?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/png">
        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="d-flex flex-column min-vh-100 bg-dark">
        <header class="mb-5">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="../assets/favicon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Diététique Heyrieux
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Notre approche</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Notre équipe</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Ateliers culinaires</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Cours diététiques</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Actualités</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Contact</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Espace patient</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Boutique</a>
                                </li>

                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </div>
            </nav>
        </header>