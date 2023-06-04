<?php

//Inclure le modèle 'user' pour pouvoir utiliser les fonctions qui lui sont dédié
include_once 'models/user.php';

//Déclaration des données
$email = "";
$password = "";
$lastname = "";
$firstname = "";
$username = "";
$street = "";
$zipcode = "";
$city = "";
$phone = "";

$email_error = "";
$username_error = "";

$email_validity = "";
$password_validity = "";
$lastname_validity = "";
$firstname_validity = "";
$username_validity = "";
$street_validity = "";
$zipcode_validity = "";
$city_validity = "";
$phone_validity = "";

$valid = "";

// Si déjà connecté, renvoyé à l'accueil
if (isset($_SESSION['connected'])) {
    header('Location: ?page=home');
}

//Si le formulaire d'inscription est posté
if (isset($_POST['register'])) {

    //Gestion des informations du user
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $username = htmlspecialchars(trim($_POST['username']));
    $street = htmlspecialchars(trim($_POST['street']));
    $zipcode = htmlspecialchars(trim($_POST['zipcode']));
    $city = htmlspecialchars(trim($_POST['city']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    //Si une des informations du user est vide
    if (empty($email) || empty($password) || empty($lastname) || empty($firstname) || empty($username) || empty($street) || empty($zipcode) || empty($city) || empty($phone)) {

        $email_validity = empty($email) ? "is-invalid" : "is-valid";
        $password_validity = empty($password) ? "is-invalid" : "is-valid";
        $lastname_validity = empty($lastname) ? "is-invalid" : "is-valid";
        $firstname_validity = empty($firstname) ? "is-invalid" : "is-valid";
        $username_validity = empty($username) ? "is-invalid" : "is-valid";
        $street_validity = empty($street) ? "is-invalid" : "is-valid";
        $zipcode_validity = empty($zipcode) ? "is-invalid" : "is-valid";
        $city_validity = empty($city) ? "is-invalid" : "is-valid";
        $phone_validity = empty($phone) ? "is-invalid" : "is-valid";

        $signin_information = "Vous devez renseigner tous les champs.";
        $valid = 'alert-danger';
    }

    //Si les informations du user sont complétés
    else {

        //Vérifier si l'email et/ou l'username est déjà pris
        $foundEmail = getUserByEmail($email);
        $foundUsername = getUserByUsername($username);

        //Si l'email et/ou l'username n'est pas déjà pris
        if (!$foundEmail && !$foundUsername) {
            $response = register($email, $password, $lastname, $firstname, $username, $street, $zipcode, $city, $phone);

            //Informer l'utilisateur que ça connection a réussie
            if ($response) {
                $signin_information = "Inscription réussie !";
                $valid = 'alert-success';

                // Redirection vers l'accueil
                header("refresh:3;url=?page=home");
            }
        } 
        
        //Si l'email et/ou l'username est déjà pris
        else {
            //Informer l'utilisateur que ça connection n'a pas réussie
            $signin_information = "Identifiants déjà utilisés.";
            $valid = 'alert-danger';

            //Préciser que c'est l'email qui est déjà pris
            if ($foundEmail) {
                $email_validity = "is-invalid";
                $email_error = '<div class="invalid-feedback">Email déjà utilisé.</div>';
            }

            //Préciser que c'est l'username qui est déjà pris
            if ($foundUsername) {
                $username_validity = "is-invalid";
                $username_error = '<div class="invalid-feedback">Le nom d\'utilisateur est déjà pris.</div>';
            }
        }
    }
}

//Inclure la vue de la l'inscription
include_once 'views/page/connection/register.php';
