<?php

require_once '../common.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    array_map('trim', $_POST);

    echo json_encode(login($_POST['username'], $_POST['password']), JSON_PRETTY_PRINT);
    exit();
}

echo json_encode(['type' => 'error', 'message' => "il n'y a pas de login et mot de passe"], JSON_PRETTY_PRINT);
