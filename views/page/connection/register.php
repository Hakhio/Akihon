<div class="container my-3">
    <!-- Titre de la page -->
    <h1 class="text-center">Inscription</h1>

    <!-- Réserver l'emplacement du message d'erreur -->
    <div class="alert <?=$valid?> mb-3 my-4"><?=isset($signin_information) ? $signin_information : '‎' ?></div>

    <!-- Formulaire -->
    <form class="row g-3" method="post" action="?page=register">
        <div class="col-md-6">
            <label for="email" class="form-label"><i class="fa-solid fa-at"></i> Email : </label>
            <input type="email" class="form-control <?= $email_validity; ?>" id="email" name="email" value="<?= $email ?>">
            <?= $email_error; ?>
        </div>

        <div class="col-md-6">
            <label for="password" class="form-label"><i class="fa-solid fa-key"></i> Mot de passe :</label>
            <input type="password" class="form-control <?= $password_validity; ?>" id="password" name="password" value="<?= $password ?>">
        </div>

        <div class="col-md-4">
            <label for="lastname" class="form-label">Nom : </label>
            <input type="text" class="form-control <?= $lastname_validity; ?>" id="lastname" name="lastname" value="<?= $lastname; ?>">
        </div>

        <div class="col-md-4">
            <label for="firstname" class="form-label">Prénom : </label>
            <input type="text" class="form-control <?= $firstname_validity; ?>" id="firstname" name="firstname" value="<?= $firstname ?>">
        </div>

        <div class="col-md-4">
            <label for="username" class="form-label">Pseudo : </label>
            <input type="text" class="form-control <?= $username_validity; ?>" id="username" name="username" value="<?= $username ?>">
            <?= $username_error; ?>
        </div>

        <div class="col-12">
            <label for="street" class="form-label"><i class="fa-solid fa-map-location-dot"></i> Adresse :</label>
            <input type="text" class="form-control <?= $street_validity; ?>" id="street" placeholder="Bois de Virelles 9" name="street" value="<?= $street ?>">
        </div>

        <div class="col-4">
            <label for="zipcode" class="form-label"><i class="fa-solid fa-location-dot"></i> Code postal :</label>
            <input type="number" class="form-control <?= $zipcode_validity; ?>" id="zipcode" name="zipcode" value="<?= $zipcode ?>">
        </div>
        <div class="col-4">
            <label for="city" class="form-label"><i class="fa-solid fa-city"></i> Ville :</label>
            <input type="text" class="form-control <?= $city_validity; ?>" id="city" name="city" value="<?= $city ?>">
        </div>
        <div class="col-4">
            <label for="phone" class="form-label"><i class="fa-solid fa-phone"></i> Téléphone :</label>
            <input type="tel" class="form-control <?= $phone_validity; ?>" id="phone" name="phone" value="<?= $phone ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="register">S'inscrire</button>
        </div>
    </form>
</div>