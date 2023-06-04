<div class="container my-3">
    <!-- Titre de la page -->
    <h1 class="text-center">Connexion</h1>

    <!-- Réserver l'emplacement du message d'erreur -->
    <div class="alert <?=$valid?> mb-3 my-4"><?=isset($signin_information) ? $signin_information : '‎' ?></div>

    <!-- Formulaire -->
    <form method="post" action="?page=sign-in">
        <div class="form-floating mb-3">
            <input type="email" class="form-control <?= $email_validity ?>" id="floatingInput" placeholder="name@example.com" name="email" value="<?= $email ?>">
            <label for="floatingInput">Email :</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control <?= $password_validity ?>" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Mot de passe :</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="sign-in">Se connecter</button>
    </form>

    <p class="my-3">Vous n'avez pas de compte ? <a href="?page=register">Inscrivez-vous ici</a></p>
</div>