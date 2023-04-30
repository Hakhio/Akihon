<h1 class="mb-3">Inscription</h1>

<form action="register" method="POST">

    <fieldset>

        <legend class="mb-4">Informations personnelles</legend>

        <div class="row mb-4">

            <div class="col-lg-4 col-xs-12">
                <label for="lastname" class="form-label"><i class="fa-solid fa-address-card"></i> Nom de famille :</label>
                <input type="text" name="lastname" id="lastname" autofocus required>
            </div>

            <div class="col-lg-4 col-xs-12">
                <label for="firstname" class="form-label"><i class="fa-solid fa-address-card"></i> Prénom :</label>
                <input type="text" name="firstname" required>
            </div>


            <div class="col-lg-4 col-xs-12">
                <h4>Genre</h4>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" <?= !isset($gender) || isset($gender) && $gender == 'M' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender1"><i class="fa-solid fa-mars"></i> Homme</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="F" <?= isset($gender) && $gender == 'F' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender2"><i class="fa-solid fa-venus"></i> Femme</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender3" value="X" <?= isset($gender) && $gender == 'X' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender3"><i class="fa-solid fa-genderless"></i> Non binaire</label>
                </div>
            </div>

        </div>

        <div class="row mb-4">

            <div class="col-lg-4 col-xs-12">

                <div class="mb-3">
                    <label for="birthplace" class="form-label"><i class="fa-solid fa-location-dot"></i> Lieu de naissance :</label>
                    <input type="text" name="birthplace" >
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">

                <div class="mb-3">
                    <label for="birthdate" class="form-label"><i class="fa-solid fa-cake-candles"></i> Date de naissance :</label>
                    <input type="date" name="birthdate" >
                </div>

            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="mb-3">
                    <label for="phone_number" class="form-label"><i class="fa-solid fa-phone"></i> Numéro de téléphone :</label>
                    <input type="tel" name="phone_number" name="phone_number" id="phone_number">
                </div>
            </div>
        </div>

    </fieldset>

    <!-- 
        DONNEES DE CONNEXION
     -->

    <div class="row mb-4">
        <div class="col-lg-6 col-xs-12">
            <fieldset>
                <legend>Données de connexion</legend>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fa-solid fa-at"></i> Email :</label>
                        <input type="text" name="email" id="email" required>
                        
                    </div>
                </div>

                <div class="col">

                    <div class="mb-3">
                        <label for="password" class="form-label"><i class="fa-solid fa-key"></i> Mot de passe :</label>
                        <input type="text" name="password" id="password" required>
                        
                    </div>

                    <div class="mb-3">
                        <label for="repeat_password" class="form-label"><i class="fa-solid fa-arrow-rotate-right"></i> Répéter le mot de passe :</label>
                        <input type="text" name="repeat_password" id="repeat_password" required>
                       
                    </div>

                </div>
            </fieldset>
        </div>

        <div class="col-lg-6 col-xs-12">
            <fieldset>
                <legend>Adresse</legend>

                <div class="mb-3">
                    <label for="street" class="form-label"><i class="fa-solid fa-location-dot"></i> Rue :</label>
                    <input type="text" name="street" id="street">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label"><i class="fa-solid fa-hashtag"></i> Numéro :</label>
                    <input type="text" name="number" id="number">
                </div>

                <div class="mb-3">
                    <label for="zip_code" class="form-label"><i class="fa-solid fa-book"></i> Code postal :</label>
                    <input type="text" name="zip_code" id="zip_code">
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label"><i class="fa-solid fa-city"></i> Ville :</label>
                    <input type="text" name="city" id="city">
                </div>

            </fieldset>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" name="register_request">Submit</button>
</form>