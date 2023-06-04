<?php

//Inclure le modèle 'user' pour pouvoir utiliser les fonctions qui lui sont dédié
include_once 'models/user.php';

//Déclaration des données
$email = "";
$password = "";

$email_validity = "";
$password_validity = "";

$valid = "";

// Si déjà connecté, renvoyé à l'accueil
if (isset($_SESSION['connected'])) {
    header('Location: ?page=home');
}

//Si le formulaire de connection est posté
if (isset($_POST['sign-in'])) {

    //Gestion des identifiants
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    //Si un des identifiants est vide
    if (empty($email) || empty($password)) {

        $email_validity = empty($email) ? "is-invalid" : "is-valid";
        $password_validity = empty($password) ? "is-invalid" : "is-valid";

        $signin_information = "Vous devez entrer un email et un mot de passe.";
        $valid = "alert-danger";
    }

    //Si les identifiants sont complétés
    else {

        //Vérifier si le user est dans la base de données (Si oui, 'signIn' le renvoie, sinon il renvoie false)
        $user = signIn($email, $password);

        //Si le user est belle est bien dans la base de données
        if ($user != false) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['isadmin'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['connected'] = true;

            header('Location: ?page=home');

            $signin_information = "Connexion réussie !";
            $valid = "alert-success";
        }

        //Si le user n'est pas dans la base de données
        else {
            $signin_information = "Identifiants Incorrect !";
            $valid = "alert-danger";
        }
    }
}

//Inclure la vue de la connection
include_once 'views/page/connection/sign-in.php';
