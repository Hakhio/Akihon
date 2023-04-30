<h1>Connexion</h1>
<div class="sm-12 signin-container">

    <form action="sign-in" method="POST">

        <div class="row align-items-center ms-auto">

            <div class="col-lg-6">
                <img src="public/img/logo.png" alt="Logo" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">

                <?php
                
                if(!empty($signin_information)) {
                    echo '<div class="form-floating mb-3 my-4">';
                    echo $signin_information;
                    echo '</div>';
                }
                
                ?>

                <!-- EMAIL -->
                <div class="form-floating mb-3 my-4">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <label for="email"><i class="fa-solid fa-at"></i> Email</label>
                    
                </div>

                <!-- PASSWORD -->
                <div class="form-floating my-4">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <label for="password"><i class="fa-solid fa-key"></i> Mot de passe</label>
                    
                </div>

            </div>

            <button type="submit" class="btn btn-primary w-25 ms-auto mb-3">Se connecter</button>

            <!-- S'enregistrer -->
            <p class="text-center">Toujours pas inscrit ? C'est par <a href="../connection/register.php">ici</a> !</p>

        </div>


    </form>
</div>