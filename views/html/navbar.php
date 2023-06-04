<!-- Barre de navigation -->
<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href=".">
            <img src="public/img/base/logo2.png" alt="Logo" height="50" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-2">
                <li class="nav-item  mx-2">
                    <a class="nav-link <?= ($page == 'home' || $page == '' ? 'active' : '') ?>" aria-current="page" href=".">Accueil</a>
                </li>

                <li class="nav-item  mx-2">
                    <a class="nav-link <?= ($page == 'news' ? 'active' : '') ?>" href="?page=news">Nouveautés</a>
                </li>

                <li class="nav-item  mx-2">
                    <a class="nav-link <?= ($page == 'mangas' ? 'active' : '') ?>" href="?page=mangas">Mangas</a>
                </li>

                <li class="nav-item  mx-2">
                    <a class="nav-link <?= ($page == 'contact' ? 'active' : '') ?>" href="?page=contact">Contact</a>
                </li>

                <li class="nav-item  mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <?= isset($_SESSION['connected']) ? $_SESSION['username'] : 'Invité' ?>
                    </a>
                    <ul class="dropdown-menu">

                        <?php
                        if (!isset($_SESSION['connected'])) {
                            echo '<li><a class="dropdown-item" href="?page=sign-in">Mon compte</a></li>';
                        } else {
                            echo '<li><a class="dropdown-item" href="?page=account">Mon compte</a></li>';
                            if ($_SESSION['admin'] == 1) {
                                echo '<li><a class="dropdown-item" href="?page=gestion">Gestion</a></li>';
                            }
                        }
                        ?>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <?php
                        if (!isset($_SESSION['connected'])) {
                            echo '<li><a class="dropdown-item" href="?page=sign-in">Connexion</a></li>';
                        } else {
                            echo '<li><a class="dropdown-item" href="?page=sign-out">Déconnexion</a></li>';
                        }
                        ?>
                    </ul>
                </li>
            </ul>


        </div>
    </div>
</nav>
<!-- Fin de la barre de navigation -->