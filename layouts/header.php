<?php
$page = $_SERVER['PHP_SELF'];
$sec = "15";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="diététique, cabinet, heyrieux, santé, nutrition, soin de soi, rééquilibrage alimentaire, nutrition clinique, ateliers culinaires, cours de diététique">
        <meta name="description" content=<?php echo ($description) ?? ' '; ?>>
        <title><?php echo($title) ?? 'Diététique Heyrieux';?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/png">
        <!-- My styleSheet -->
        <link rel="stylesheet" href="../public/style.css">
        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>

    <body class="d-flex flex-column min-vh-100">
        <header id="header" class="mb-3">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="?page=home">
                <img src="../assets/favicon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Diététique Heyrieux
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?page=home">Accueil</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=notre-approche">Notre approche</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=notre-equipe">Notre équipe</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=ateliers-culinaires">Ateliers culinaires</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=cours-dietetique">Cours diététiques</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=actualites">Actualités</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=espace-patient">Espace patient</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?page=boutique">Boutique</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </header>