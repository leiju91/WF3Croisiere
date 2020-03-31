<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;port=3308;dbname=wf3_croisiere', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$pdo->exec("SET CHARACTER SET utf8"); // Indique à PDO qu'on veut de l'encodage UTF-8

require_once 'destination.php';
require_once 'cruise.php';
