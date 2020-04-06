<?php
// Ecrire un fichier functions.php qui contiendra la fonction getRealString et retournera une chaine en supprimant les espaces
require_once 'functions.php';

$result = getRealString('   BONJOUR   '); // Supprime les espaces
echo $result;
