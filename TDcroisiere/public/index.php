<?php
require_once('./../src/common.php');

// On récupére la valeur GET "p" qui se trouve dans le lien
$page = $_GET['p'] ?? "accueil";

// securité: empeche de cgharger n'importe quel fichier
// $page = str_replace('/', '', $page);
// test si $page contient d'autre caractère que des lettres en min et maj
if (!preg_match('/^[a-zA-Z]*$/', $page)) {
    $page = 'accueil';
}

// S'il y a la chaine "admin_" dans cette variable
if (strpos($page, 'admin_') !== false) {
    $page = substr($page, 6); // On supprime "admin_" de la chaîne
    checkAdmin(); // Test si l'utilisateur est administrateur
    require_once("./../src/page/admin/$page.php"); // Charge la page dans le dossier admin
} else {
    require_once("./../src/page/$page.php"); // Charge la page
}
