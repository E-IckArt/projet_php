<?php
$title = "Diététique Heyrieux - Contact";
$description = "Contactez vos diététiciennes d'Heyrieux";

include_once './layouts/header.php';
include_once './layouts/searchBar.php';

?>

<main class="container contact--container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
            <h1 class="text-primary">Contact</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center position-relative">
            <div class="fs-1 text-center fw-bold">
                <img class="contact--img" src="../assets/contact.svg" alt="#">
            </div>
            <!-- Test Form - START -->
            <div class="row">
                <form action="" method="POST">
                    <div class="col-12 col-md-8 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <select class="form-select opacity-75 mb-3" name="civility" aria-label="Sélectionner votre civilité (madame ou monsieur)">
                                    <option selected>Civilité</option>
                                    <option value="Madame">Madame</option>
                                    <option value="Monsieur">Monsieur</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-floating opacity-75 mb-3">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
                                    <label for="lastname">Nom <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating opacity-75 mb-3">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
                                    <label for="firstname">Prénom <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating opacity-75 mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="nom@example.com">
                            <label for="email">Email <span class="text-danger">*</span></label>
                        </div>
                        <div class="bg-white opacity-75 border border-secondary rounded rounded-3 opacity-75 mb-3 p-3" style="--bs-border-opacity: .75">
                            <p class="fw-bold"> Raison du contact <span class="text-danger">*</span></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contactReason" id="askForInformations" checked>
                                <label class="form-check-label" for="askForInformations">
                                    Demande d'informations
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contactReason" id="askForConnexionIssue">
                                <label class="form-check-label" for="askForConnexionIssue">
                                    Problème de connection à votre espace patient
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contactReason" id="askForSuggestion">
                                <label class="form-check-label" for="askForSuggestion">
                                    Suggestions
                                </label>
                            </div>

                        </div>
                        <div class="form-floating opacity-75 mb-3">
                            <textarea class="form-control" placeholder="Laissez votre message ici" id="floatingTextarea" name="message" maxlength="500" style="height: 200px" required></textarea>
                            <label for="floatingTextarea">Tapez votre message ici <span class="text-danger">*</span> <span class="fst-italic">(500 caractères max)</span></label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Envoyer
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-send" viewBox="0 0 18 18">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</main>

<?= include_once './layouts/footer.php'; ?>