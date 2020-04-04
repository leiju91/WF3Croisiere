<?php

require_once 'database.php';
// modifie la colonne "checked" à 1

if (isset($_GET['id'])) {
    checkTask($_GET['id']);
}

header('Location: index.php');
