<?php

/* DB */

// Online version

// // Hôte
// $host = 'db5012810667.hosting-data.io:3306';

// // Nom de la base de données
// $dbname = 'dbs10760697';

// // Encodage des données
// $charset = 'utf8';

// // Data Source Name
// $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;";

// // Se connecter à la base de données
// $user = "dbu1058747";
// $pwd = "a7QyPkefX7v!dSY";

// -------------------------------------------------------------------

// Local version

// Hôte
$host = 'localhost';

// Nom de la base de données
$dbname = 'dbs10760697';

// Encodage des données
$charset = 'utf8';

// Data Source Name
$dsn = "mysql: host=$host; dbname=$dbname; charset=$charset";

// Se connecter à la base de données
$user = "root";
$pwd = "";

// -------------------------------------------------------------------

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $dberror = $e->getMessage();
    echo "Failed connection." . $dberror;
}