<?php

//TODO - Intégrer la vérification des erreurs dans une fonction

/*
- Vérifier si le serveur est en méthode POST
- Créer un tableau erreurs.
- Vérifier le contenu de la superglobale.
- Si des clés sont vides, remplir le tableau erreurs avec un message d'erreur pour chaque valeur manquante.
- Générer un message d'erreur dans la page views/contact.php pour chaque valeur manquante.
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Le nom est obligatoire';
    }

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'Le prénom est obligatoire';
    }
    if (empty($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $errors['email'] = 'L\'adresse email doit être une adresse valide';
    }
    if (empty($_POST['contactReason'])) {
        $errors['contactReason'] = 'Veuillez indiquer la raison du message';
    }
    if (empty($_POST['message']) || strlen($_POST['message']) < 5) {
        $errors['message'] = 'Le message doit contenir au moins 5 caractères';
    }
}

// Exécuter les instructions suivantes s'il n'y a pas d'erreur 
function redirectUser()
{

    if (empty($errors)) {
        echo 'Le formulaire est bien rempli';
        // Rediriger l'utilisateur sur la page 'message envoyé'
        header('Location: /views/message-submitted.php');
    }
}

// TODO - Nettoyer les champs avant enregistrement (htmlspecialchars()).

// function cleanUserInput() {}

/* TODO
- Créer une fonction pour charger les messages des utilisateurs
- Créer un dossier s'il n'existe pas.
- Créer un fichier s'il n'existe pas, l'ouvrir et y enregistrer du contenu.
*/

//function uploadMessage() {}



/* TODO 
Ajouter le / les blocks try-catch :
- pour la fonction d'enregistrement du message :  si un exception est levée : créer un fichier 'message_logs.log' pour enregistrer les messages d'erreurs.
*/

// TODO Faire une fonction générale pour appeler les autres fonctions (possibilité d'inclure les try catche à ce moment ??? ou mieux de mettre chaque try-catch sans SA propre fonction )