<?php
// Démarrage de la session
session_start();
ob_start();

$page = '';

// Inclure le haut de la page
include_once 'views/html/header.php';
include_once 'views/html/upper.php';
include_once 'views/html/navbar.php';

// La page qui changera entre les scènes
include_once 'controllers/router.php';

// Inclure le bas de la page
include_once 'views/html/footer.php';
