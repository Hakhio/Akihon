<?php

//echo($basement); //http://localhost/workspace
echo ($main);

if ($main !== '') {
    switch ($main) {

        case 'home':
            include_once 'views/page/home.php';
            break;

        /*Pages*/
        case 'news':
            include_once 'views/page/news.php';
            break;
        case 'mangas':
            include_once 'views/page/mangas.php';
            break;
        case 'cadeaux':
            include_once 'views/page/cadeaux.php';
            break;
        case 'vendre':
            include_once 'views/page/vendre.php';
            break;

        /*Users*/
        case 'profile':
            include_once 'controllers/users/profile.php';
            break;

        case 'students':
            if (!isset($second))
                include_once 'controllers/users/getAllUsers.php';
            else {
                if (isset($_POST['deleteUser']))
                    include_once 'controllers/users/getAllUsers.php';
                else
                    include_once 'controllers/users/profile.php';
            }


            break;

        /*Connection*/
        case 'sign-in':
            include_once 'controllers/connection/sign-in.php';
            break;

        case 'sign-out':
            include_once 'controllers/connection/sign-out.php';
            break;

        case 'register':
            include_once 'controllers/connection/register.php';
            break;

        /*404*/

        default:
            //include_once 'views/page/home.php';
            include_once 'views/errors/404.php';
    }
} else {
    include_once 'views/page/home.php';
}