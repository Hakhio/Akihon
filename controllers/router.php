<?php

// Si l'attribut "page" existe et qu'il n'est pas vide
if (isset($_GET['page']) && $_GET['page'] != '') {
    // On recupére l'attribut "page" dans l'URL
    $page = $_GET['page'];

    //Aller sur la bonne page
    switch ($page) {
        /* Page d'accueil */
        case 'home':
            include_once 'views/page/home.php'; break;

        /* Pages */
        case 'news':
            include_once 'views/page/news.php'; break;
        case 'mangas':
            include_once 'controllers/mangas/mangasController.php'; break;
        case 'cadeaux':
            include_once 'views/page/cadeaux.php'; break;
        case 'contact':
            include_once 'views/page/contact.php'; break;
        case 'account':
            include_once 'views/page/account.php'; break;
        case 'page':
            include_once 'controllers/mangas/mangasPageController.php'; break;

        /* Administration */
        case 'gestion':
            include_once 'views/page/gestion.php'; break;
        case 'addManga':
            include_once 'controllers/mangas/mangasAddController.php'; break;

        /* Connection */
        case 'sign-in':
            include_once 'controllers/connection/sign-in.php'; break;
        case 'sign-out':
            include_once 'controllers/connection/sign-out.php'; break;
        case 'register':
            include_once 'controllers/connection/register.php'; break;

        /* Error 404 */
        default:
            include_once 'views/errors/404.php';
    }
} 

//Si l'attribut page n'existe pas
else {
    include_once 'views/page/home.php';
}
