<?php

/* les switch permet d'exécuter du code en fct de la valeur d'une variable */

$status = 1;
// 1 = simple utilisateur, 2 = modérateur, 3 = admin 

switch ($status) {
    case 1: // Qd status = 1 ...
        echo "Vous etes simple utilisateur";
        break; // Quitte le Switch, sinon éxecute les "case" suivantes
    case 2: // Qd status = 2 ...
        echo "Vous etes modérateur";
        break;
    case 3: // Qd status = 3 ...
        echo "Yaaaaah vous etes admin";
        break;
    default: // Si aucune 'case' correspond
        echo "on sait pas qui vous etes";
}

// exemple sans break
$roles = '';

switch ($status) {
    case 3:
        $roles .= 'ADMIN'; // $roles = $roles. "ADMIN";
    case 2:
        $roles .= 'MODO';
    case 1:
        $roles .= 'USER';
}

echo '<br/>';
echo $roles;
