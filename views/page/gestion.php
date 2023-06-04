<?php
// Si pas admin, renvoyé à l'accueil
if ($_SESSION['admin'] == 0) {
    header('Location: ?page=home');
}

//Inclure le modèle 'manga'
include_once 'models/mangas.php';

//Initialisation
$cards = '';
$search = "";

// Récupérer tous les mangas
$mangas = getALlMangasWithContaint($search);

if (isset($_POST['search']) and !empty($_POST['search'])) {
    $search = htmlspecialchars($_POST['search']);
    $mangas = getAllMangasWithContaint($search);
}

//Création du tableau
if (isset($mangas) && !empty($mangas)) {
    $cards .= "<tr class='text-center'><th>Image</th><th>ISBN</th><th>Titre</th><th>Tome</th><th>Auteur</th><th>Éditeur</th><th>Catégorie</th><th>Thème 1</th><th>Thème 2</th><th>Date de Sortie</th><th>Pages</th><th>Prix</th><th>Stock</th></tr>";
    foreach ($mangas as $manga) {

        list($isbn, $titre, $auteur, $editeur, $categorie, $image1, $image2, $image3, $image4, $image5, $numeroTome, $dateSortie, $nbPages, $prixConseille, $theme1, $theme2, $stock) = $manga;

        $cards .= "<tr class='text-center align-middle'><td><img class='card-gestion' src='$image1'></td><td>$isbn</td><td>$titre</td><td>$numeroTome</td><td>$auteur</td><td>$editeur</td><td>$categorie</td><td>$theme1</td><td>$theme2</td><td>$dateSortie</td><td>$nbPages</td><td>$prixConseille €</td><td>$stock</td></tr>";
    }
} else {
    $cards .= "<h3 class='text-center my-4'>Aucun résultat pour '$search'...</h3>";
}

?>

<div class="container">
    <div class="text-center">
        <h1 class="my-4"><i class="fa-solid fa-shield-halved"></i> - Administration</h1>

        <!-- Création du bouton d'ajout de manga à la base de données -->
        <a href='?page=addManga' class='card-button btn btn-success pull-right mt-4 mx-3'>Ajouter</a>
        <a href='#' class='card-button btn btn-danger pull-right mt-4 mx-3'>Supprimer</a>
        <a href='#' class='card-button btn btn-primary pull-right mt-4 mx-3'>Modifier</a>

        <form class="d-flex  my-4" role="search" method='POST'>
            <input id="Search" class="form-control me-2" type="search" placeholder="Rechercher par titre ..."
                aria-label="Search" name="search" value="<?= $search ?>">
            <button class="btn btn-outline-success mx-2" type="submit">Rechercher</button>
        </form>

        <div class="table-responsive">
            <table class="table table-striped">
                <?= $cards ?>
            </table>
        </div>
    </div>
</div>