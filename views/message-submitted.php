<?php

$title = "Diététique Heyrieux - Message envoyé ";
$description = "Présentation de nos diététiciennes de votre cabinet.";

include_once './layouts/header.php';
include_once './layouts/searchBar.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
            <h1 class="text-primary">Message Envoyé</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
            <div class="fs-1 text-center fw-bold">
                <p class="my-5 text-warning">
                    Votre message a bien été envoyé.
                </p>
                <a  class="btn btn-primary" href="?page=home"  role="button">Revenir à l'accueil</a>
                <img src="../assets/home.svg" alt="#">
            </div>


        </div>
    </div>
</main>

<?= include_once './layouts/footer.php'; ?>
