<?php

$patternEmail = "/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rerrors = [];

    // Vérification du formulaire.
    if (empty($_POST['lastname'])) {
        $errors['lastname'] = "Le nom est obligatoire.";
    }

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = "Le prénom est obligatoire.";
    }

    if (empty($_POST['message'] || (strlen($_POST['message']) >= 5))) {
        $errors['message'] = " Le message est obligatoire est doit contenir au moins cinq caractères.";
    }

    if (empty($_POST['email']) || !preg_match(
        $patternEmail,
        $email
    )) {
        $errors['email'] = "L'adresse email doit être une adresse valide.";
    }

    if (empty($rerrors)) {
        // Créer un dossier, créer un fichier et enregistrer les données.


        // TODO - Retirer les messages si tout fonctionne.
        echo "Le formulaire est valide, les données ont bien été enregistrées.";
        echo '<pre>';
        var_dump($_POST);
        echo '<pre>';

        // Redigirer l'utilisateur
        header("Location: /views/message-submitted.php");
    }
}


/*
var_dump($_POST);

// Enregistrer le message
// TODO - Dans un tableau !!!!

function uploadMessages()
{
    $uploads_dir = 'uploads/messages' . DIRECTORY_SEPARATOR;
    $fileName = $uploads_dir . 'message-array.php';

    if (!is_dir($uploads_dir)) {
        try {
            mkdir('uploads/messages');
            echo 'Le répertoire a été créé';
        } catch (Exception $e) {
            echo 'Une erreur est survenue, le répertoire n\a pas été crée :' . $e->getMessage();
        }
    }
    file_put_contents($fileName, $_POST . PHP_EOL, FILE_APPEND);
}

if ($_POST) {
    var_dump($_POST);
    $civility = $_POST['civility'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $contactReason = $_POST['contactReason'];
    $message = $_POST['message'];

    if (!empty($civility) && !empty($lastname) && !empty($firstname) && (!empty($message) && (strlen($message)>= 5)) && !empty($contactReason) && !empty($email) ) {
        try {
            uploadMessages();
            //Renvoyer l'utilisateur vers la page de confirmation d'envoi du message
            header('Location: ../views/message-submitted.php');
        } catch (Exception $exception) {
            // Envoyer le message d'erreur dans un fichier
            file_put_contents('message_logs.log', $exception->getMessage().PHP_EOL, FILE_APPEND);
            exit('Une erreur s\'est produite, votre message n\'a pas pu être enregistré. Veuillez vérifier votre saisie.');
        }
    } else {
        switch ($_POST) {
                case (!empty($lastname) == false) :
                    echo 'Merci de renseigner votre nom';
                    break;
                case (!empty($firstname) == false) :
                    echo 'Merci de renseigner votre prénom';
                    break;
                case (!empty($email) == false) :
                    echo 'Merci de renseigner votre email';
                    break;
                case (!empty($contactReason) == false) :
                    echo 'Merci de choisir un motif de contact';
                    break;
                case (!empty($message) == false) :
                case (strlen($message)>= 5) :
                    echo 'Votre message doit contenir au moins 5 caratères';
                    break;
                default:
                    echo 'ça ne marche pas';
            }
    }
} else{
    echo 'Il manque des données pour soumettre votre formulaire';
}

*/
