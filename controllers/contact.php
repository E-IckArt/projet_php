<?php
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
