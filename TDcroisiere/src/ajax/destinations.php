<?php

// charge toutes les destinations et retourne le resultat dans un json

require_once '../common.php';

header('Content-Type: application/json');
echo json_encode(getAllDestinations(), JSON_PRETTY_PRINT);
