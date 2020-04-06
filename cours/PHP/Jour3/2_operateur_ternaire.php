<?php

$admin = false;

$message = "";

if ($admin) {
    $message = "Vous etes admin";
} else {
    $message = "Vous n'etes pas admin";
}


// operateurs ternaire
$message = ($admin) ? 'vous etes admin' : ' vous etes pas admin';
// même resultat que plus haut mais plus court

// (condition) ? alors : sinon

$username = isset($_POST['username']) ? $_POST['username'] : null;
// Si $_POST['username'] est definit alors on l'affecte dans $username sinon $username sera null
$username = $_POST['username'] ?? null; // fait la meme chose que dessus
