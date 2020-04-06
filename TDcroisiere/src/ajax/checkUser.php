<?php
require_once '../common.php';
$result = [];

if ($_GET['username'] && $_GET['email']) {
    if (isUserExists($_GET['username'], $_GET['email'])) {
        echo json_encode(['type' => 'error', 'message' => "L'utilisateur existe déjà"], JSON_PRETTY_PRINT);
        exit();
    }
}
// l'utilisateur n'existe pas
echo json_encode(['type' => 'success', 'message' => ""], JSON_PRETTY_PRINT);
