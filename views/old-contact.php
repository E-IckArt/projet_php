<?php
$title = "Diététique Heyrieux - Contact";
$description = "Contactez vos diététiciennes d'Heyrieux";

require_once './layouts/header.php';
require_once './layouts/searchBar.php';

require './controllers/contact.php';


$civility = $_POST['civility'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$contactReason = $_POST['contactReason'];
$message = $_POST['message'];
$send = $_POST['send'];

$patternEmail = "/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD";



// Enregistrer le message
// TODO - Dans un tableau !!!!
function uploadMessages()
{
    $uploads_dir = '../uploads/messages' . DIRECTORY_SEPARATOR;
    $fileName = $uploads_dir . 'message-array.php';

    // Créer un dossier uploads s'il n'existe pas
    if (!is_dir($uploads_dir)) {
        try {
            mkdir('../uploads/messages');
            echo 'Le répertoire a été créé';
        } catch (Exception $e) {
            echo 'Une erreur est survenue, le répertoire n\a pas été crée :' . $e->getMessage();
        }
    }

    // Créer un fichier s'il n'existe pas. Ajouter le contenu de la variable $_POST au fichier
    file_put_contents($fileName, implode(',', $_POST) . PHP_EOL, FILE_APPEND);
}

if (isset($send)) {
    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';
    if (
        !empty($civility) && !empty($lastname) && !empty($firstname) && (!empty($message) && (strlen($message) >= 5))
        && !empty($contactReason) && (!empty($email) && preg_match(
            $patternEmail,
            $email
        )
        )
    ) {
        try {
            uploadMessages();
            //Renvoyer l'utilisateur vers la page de confirmation d'envoi du message
            //            header('Location: ../views/message-submitted.php');
        } catch (Exception $exception) {
            // Envoyer le message d'erreur dans un fichier
            file_put_contents('message_logs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
            exit('Une erreur s\'est produite, votre message n\'a pas pu être enregistré. Veuillez vérifier votre saisie.');
        }
    } else {
        switch ($_POST) {
            case (empty($lastname)):
                $error = 'Merci de renseigner votre nom';
                break;
            case (empty($firstname)):
                $error = 'Merci de renseigner votre prénom';
                break;
            case (empty($email)):
                $error = 'Merci de renseigner votre email';
                break;
            case (empty($contactReason)):
                $error = 'Merci de choisir un motif de contact';
                break;
            case (empty($message)):
            case (strlen($message) >= 5):
                $error = 'Votre message doit contenir au moins 5 caratères';
                break;
            default:
                $error = 'ça ne marche pas';
        }
        echo '<pre>';
        var_dump($_POST);
        echo '<pre>';
    }
} else {
    echo 'Il manque des données pour soumettre votre formulaire';
}

?>

<main class="container contact--container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto text-center position-relative">
            <h1 class="text-primary">Contact</h1>
            <!-- Test Form - START -->
            <div class="row">
                <form action="?page=contact" method="POST">
                    <div class="col-12 col-md-8 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <select class="form-select opacity-75 mb-3" name="civility" aria-label="Sélectionner
                                votre civilité (Madame ou Monsieur)">
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
                        <button type="submit" class="btn btn-primary mb-5" name="send" value="Envoyer">Envoyer
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-send" viewBox="0 0 18 18">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <div id="error"><?php echo $error ?></div>
            </div>
        </div>
    </div>
</main>

<?= include_once './layouts/footer.php'; ?>