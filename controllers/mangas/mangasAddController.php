<?php

//Inclure le modèle 'user' pour pouvoir utiliser les fonctions qui lui sont dédié
include_once 'models/mangas.php';

//Déclaration des données
$isbn = "";
$title = "";
$author = "";
$editor = "";
$category = "";
$image1 = "";
$image2 = "";
$image3 = "";
$image4 = "";
$image5 = "";
$tome_number = "";
$released_date = "";
$nbPages = "";
$adviced_price = "";
$theme1 = "";
$theme2 = "";
$stock = "";

$isbn_error = "";

$isbn_validity = "";
$title_validity = "";
$author_validity = "";
$editor_validity = "";
$category_validity = "";
$image1_validity = "";
$image2_validity = "";
$image3_validity = "";
$image4_validity = "";
$image5_validity = "";
$tome_number_validity = "";
$released_date_validity = "";
$nbPages_validity = "";
$adviced_price_validity = "";
$theme1_validity = "";
$theme2_validity = "";
$stock_validity = "";

$valid = "";

//Si pas connecté, renvoyé à l'accueil
if (!isset($_SESSION['connected'])) {
    header('Location: ?page=home');
}

//Si le formulaire d'ajout est posté
if (isset($_POST['add'])) {

    //Gestion des informations du user
    $isbn = htmlspecialchars(trim($_POST['isbn']));;
    $title = htmlspecialchars(trim($_POST['title']));;
    $author = htmlspecialchars(trim($_POST['author']));;
    $editor = htmlspecialchars(trim($_POST['editor']));;
    $category = htmlspecialchars(trim($_POST['category']));;
    $image1 = htmlspecialchars(trim($_POST['image1']));;
    // $image2 = htmlspecialchars(trim($_POST['image2']));;
    // $image3 = htmlspecialchars(trim($_POST['image3']));;
    // $image4 = htmlspecialchars(trim($_POST['image4']));;
    // $image5 = htmlspecialchars(trim($_POST['image5']));;
    $tome_number = htmlspecialchars(trim($_POST['tome_number']));;
    $released_date = htmlspecialchars(trim($_POST['released_date']));;
    $nbPages = htmlspecialchars(trim($_POST['nbPages']));;
    $adviced_price = htmlspecialchars(trim($_POST['adviced_price']));;
    $theme1 = htmlspecialchars(trim($_POST['theme1']));;
    $theme2 = htmlspecialchars(trim($_POST['theme2']));;
    $stock = htmlspecialchars(trim($_POST['stock']));;

    //Si une des informations du manga est vide
    if (empty($isbn) || empty($title) || empty($author) || empty($editor) || empty($category) || empty($image1) || empty($tome_number) || empty($released_date) || empty($nbPages) || empty($adviced_price) || empty($theme1) || empty($theme2) || empty($stock)) {

        $isbn_validity = empty($isbn) ? "is-invalid" : "is-valid";
        $title_validity = empty($title) ? "is-invalid" : "is-valid";
        $author_validity = empty($author) ? "is-invalid" : "is-valid";
        $editor_validity = empty($editor) ? "is-invalid" : "is-valid";
        $category_validity = empty($category) ? "is-invalid" : "is-valid";
        $image1_validity = empty($image1) ? "is-invalid" : "is-valid";
        $image2_validity = empty($image2) ? "is-invalid" : "is-valid";
        $image3_validity = empty($image3) ? "is-invalid" : "is-valid";
        $image4_validity = empty($image4) ? "is-invalid" : "is-valid";
        $image5_validity = empty($image5) ? "is-invalid" : "is-valid";
        $tome_number_validity = empty($tome_number) ? "is-invalid" : "is-valid";
        $released_date_validity = empty($released_date) ? "is-invalid" : "is-valid";
        $nbPages_validity = empty($nbPages) ? "is-invalid" : "is-valid";
        $adviced_price_validity = empty($adviced_price) ? "is-invalid" : "is-valid";
        $theme1_validity = empty($theme1) ? "is-invalid" : "is-valid";
        $theme2_validity = empty($theme2) ? "is-invalid" : "is-valid";
        $stock_validity = empty($stock) ? "is-invalid" : "is-valid";

        $add_manga_information = "Vous devez renseigner tous les champs.";
        $valid = 'alert-danger';
    }

    //Si les informations du manga sont complétés
    else {

        //Vérifier si l'isbn est déjà pris
        $foundIsbn = getByIsbn($isbn);

        //Si l'Isbn n'est pas déjà pris
        if (!$foundIsbn) {
            $response = add( $isbn, $title, $author, $editor, $category, $image1, $image2, $image3, $image4, $image5, $tome_number, $released_date, $nbPages, $adviced_price, $theme1, $theme2, $stock);

            //Informer l'utilisateur que ça connection a réussie
            if ($response) {
                $add_manga_information = "Ajouts réussie !";
                $valid = 'alert-success';

                // Redirection vers l'accueil
                header("refresh:3;url=?page=gestion");
            }
        } 
        
        //Si l'isbn est déjà pris
        else {
            //Informer l'administrateur que l'ajout n'a pas réussi
            $signin_information = "ISBN déjà utilisés.";
            $valid = 'alert-danger';

            //Préciser que c'est l'isbn qui est déjà pris
            if ($foundIsbn) {
                $isbn_validity = "is-invalid";
                $isbn_error = '<div class="invalid-feedback">ISBN déjà utilisé.</div>';
            }
        }
    }
}

//Inclure la vue de la l'inscription
include_once 'views/page/addManga.php';
