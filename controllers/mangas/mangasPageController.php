<?php

$isbn = $_GET['id'];

// Logique métier
include_once 'models/mangas.php';

//Récupérer le manga grace à l'ISBN
$manga = getByIsbn($isbn);

//Créer toutes les variables utile grace à ce manga
list($isbn, $title, $author, $editor, $category, $image1, $image2, $image3, $image4, $image5, $tome_number, $released_date, $nbPages, $adviced_price, $theme1, $theme2, $stock) = $manga[0];

//Afficher la date sous format litéral
$date = new DateTime($released_date);
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$released_date = $formatter->format($date);

// Vue
include_once 'views/page/page.php';
