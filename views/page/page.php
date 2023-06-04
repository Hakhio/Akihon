<?php
$manga_id = isset($manga_id) ? $manga_id : '';
?>

<div class="container">
    <h1 class="text-center my-4 mb-5"><?= $title ?></h1>

    <!-- Informations à propos du manga ... -->
    <div class="row justify-content-around">

        <div class="card col-12 col-md-6 col-lg-3">
            <div><img src="<?= $image1 ?>" class="card-page card-img-top col-2 img-fluid"></div>
            <div class='card-body row align-items-start custom-lin'>
                <div class='col-6'>
                    <p>Tome <?= $tome_number ?></p>
                </div>
                <div class='col-6'>
                    <p class='text-end fw-bold'><?= $adviced_price ?> €</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 col-lg-4 my-4">
            <h5>ISBN : <?= $isbn ?></h5>
            <h5>Autheur : <?= $author ?></h5>
            <h5>Date de sortie : <?= $released_date ?></h5>
            <h5>Nombre de page : <?= $nbPages ?></h5>
            <br>
            <h5>Catégorie : <?= $category ?></h5>
            <h5>Thème : <?= isset($theme1) ? $theme1 : '' ?><?= isset($theme2) ? ', ' . $theme2 :  '' ?></h5>
            <br>
            <h5>Stock : <?= $stock ?></h5>
            <hr>
            <div id="button " class='text-center'><a href='#' class='btn btn-success text-center'>Ajouter au panier</a></div>
        </div>
    </div>
</div>