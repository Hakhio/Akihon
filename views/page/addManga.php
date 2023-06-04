<div class="container my-3">
    <!-- Titre de la page -->
    <h1 class="text-center"><i class="fa-solid fa-book"></i> - Ajouter un manga</h1>

    <!-- Réserver l'emplacement du message d'erreur -->
    <div class="alert <?=$valid?> mb-3 my-4"><?=isset($add_manga_information) ? $add_manga_information : '‎' ?></div>

    <form class="row g-3" method="post" action="?page=addManga">
        <!-- Ligne 1 -->
        <div class="col-md-3">
            <label for="isbn" class="form-label"><i class="fa-solid fa-book"></i> ISBN : </label>
            <input type="number" class="form-control <?= $isbn_validity; ?>" id="isbn" name="isbn" value="<?= $isbn ?>">
            <?= $isbn_error; ?>
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label"><i class="fa-solid fa-heading"></i> Titre : </label>
            <input type="text" class="form-control <?= $title_validity; ?>" id="title" name="title" value="<?= $title ?>">
        </div>
        <div class="col-md-3">
            <label for="category" class="form-label"><i class="fa-regular fa-comments"></i> Catégorie : </label>
            <input type="text" class="form-control <?= $category_validity; ?>" id="category" name="category" value="<?= $category ?>">
        </div>

        <!-- Ligne 2 -->
        <div class="col-md-3">
            <label for="author" class="form-label"><i class="fa-solid fa-pen-nib"></i> Autheur : </label>
            <input type="text" class="form-control <?= $author_validity; ?>" id="author" name="author" value="<?= $author ?>">
        </div>
        <div class="col-md-3">
            <label for="editor" class="form-label"><i class="fa-solid fa-newspaper"></i> Éditeur : </label>
            <input type="text" class="form-control <?= $editor_validity; ?>" id="editor" name="editor" value="<?= $editor ?>">
        </div>
        <div class="col-md-6">
            <label for="image1" class="form-label"><i class="fa-solid fa-link"></i> Image : </label>
            <input type="text" class="form-control <?= $image1_validity; ?>" id="image1" name="image1" value="<?= $image1 ?>">
        </div>
        

        <!-- Ligne 3 -->
        <div class="col-md-4">
            <label for="theme1" class="form-label"><i class="fa-regular fa-circle-question"></i> Thème 1 : </label>
            <input type="text" class="form-control <?= $theme1_validity; ?>" id="theme1" name="theme1" value="<?= $theme1 ?>">
        </div>
        <div class="col-md-4">
            <label for="theme2" class="form-label"><i class="fa-regular fa-circle-question"></i> Thème 2 : </label>
            <input type="text" class="form-control <?= $theme2_validity; ?>" id="theme2" name="theme2" value="<?= $theme2 ?>">
        </div>
        <div class="col-md-4">
            <label for="released_date" class="form-label"><i class="fa-regular fa-calendar-days"></i> Date de sortie : </label>
            <input type="date" class="form-control <?= $released_date_validity; ?>" id="released_date" name="released_date" value="<?= $released_date ?>">
        </div>

        <!-- Ligne 4 -->
        <div class="col-md-3">
            <label for="tome_number" class="form-label"><i class="fa-solid fa-arrow-up-1-9"></i> Numéro du tome : </label>
            <input type="number" class="form-control <?= $tome_number_validity; ?>" id="tome_number" name="tome_number" value="<?= $tome_number ?>">
        </div>
        <div class="col-md-3">
            <label for="nbPages" class="form-label"><i class="fa-solid fa-pager"></i> Nombre de pages : </label>
            <input type="number" class="form-control <?= $nbPages_validity; ?>" id="nbPages" name="nbPages" value="<?= $nbPages ?>">
        </div>
        <div class="col-md-3">
            <label for="adviced_price" class="form-label"><i class="fa-solid fa-sack-dollar"></i> Prix conseillé : </label>
            <input type="number" step="0.01" class="form-control <?= $adviced_price_validity; ?>" id="adviced_price" name="adviced_price" value="<?= $adviced_price ?>">
        </div>
        <div class="col-md-3">
            <label for="stock" class="form-label"><i class="fa-solid fa-cubes-stacked"></i> Stock : </label>
            <input type="number" class="form-control <?= $stock_validity; ?>" id="stock" name="stock" value="<?= $stock ?>">
        </div>

        <!-- Envoyer -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="add">Ajouter</button>
        </div>
    </form>
</div>