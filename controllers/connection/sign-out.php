
<?php

// Suppression de la variable de session
unset($_SESSION['connected']);

// Destruction de la session
session_destroy();

// Redirection vers l'accueil
header("Location: ?page=home");
