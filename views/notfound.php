<?php

$title = "Diététique Heyrieux - Page 404";
$description = "La page que vous cherchez n'existe pas";

include_once './layouts/header.php';
include_once './layouts/searchBar.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
            <div class="fs-1 text-center fw-bold">
            <p class="mt-3 text-warning">
            CETTE PAGE N'EXISTE PAS
            </p>
            <img src="../assets/404.svg" alt="#">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto my-5 text-center">
            <a class="nav-link text-primary fs-2" href="?page=home">Retourner à l'accueil</a>
        </div>
    </div>
</main>

<?= include_once './layouts/footer.php'; ?>