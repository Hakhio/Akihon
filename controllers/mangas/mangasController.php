<?php

// Logique métier
include_once 'models/mangas.php';

$cards = "";
$search = "";
$mangas = getAllMangas();

if (isset($_POST['search'])  and !empty($_POST['search'])) {
    $search = htmlspecialchars($_POST['search']);
    $mangas = getAllMangasWithContaint($search);
}

if (isset($mangas) && !empty($mangas)) {
    foreach ($mangas as $manga) {

        list($isbn, $titre, $auteur, $editeur, $categorie, $image1, $image2, $image3, $image4, $image5, $numeroTome, $dateSortie, $nbPages, $prixConseille, $theme1, $theme2, $stock) = $manga;

        $cards .= "<div class='card col-12 col-md-6 col-lg-2 m-3'>";
        $cards .= "<div class='text-center m-1'>";
        $cards .= "<img id='$isbn'src='$image1' class='card-img-top img-fluid' alt='...'>";
        $cards .= "<i class='card-icon fa-solid fa-magnifying-glass my-2'></i>";
        $cards .= "</div>";
        $cards .= "<div class='card-body p-0 pb-3'>";
        $cards .= "<h6 class='card-title mb-2'>$titre</h6>";
        $cards .= "<div class='row align-items-start custom-lin'>";
        $cards .= "<div class='col-6'><p class='text-start'>Tome $numeroTome</p></div>";
        $cards .= "<div class='col-6'><p class='text-end color-red'>$prixConseille €</p></div>";
        $cards .= "</div>";
        $cards .= "<div class='text-center'><a href='#' class='card-button btn btn-primary text-center'>Ajouter au panier</a></div>";
        $cards .= "</div>";
        $cards .= "</div>";
    }
} else {
    $cards .= "<h3 class='text-center my-4'>Aucun résultat pour '$search'...</h3>";
}

// Vue
include_once 'views/page/mangas.php';
