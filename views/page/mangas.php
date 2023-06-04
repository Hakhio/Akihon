<div class="container">
    <h1 class="text-center my-4"><i class="fa-solid fa-bookmark"></i> - Section Mangas</h1>

    <form class="d-flex" role="search" method='POST'>
        <input id="Search" class="form-control me-2" type="search" placeholder="Rechercher par titre ..." aria-label="Search" name="search" value="<?= $search ?>">
        <button class="btn btn-outline-success mx-2" type="submit">Rechercher</button>
    </form>

    <div class="cards row justify-content-center mx-5">
        <?= $cards; ?>
    </div>
</div>