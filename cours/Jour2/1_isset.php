<?php

/* isset () permet de savoir si une variable a été initialisée */

if (isset($undef)) {
    echo 'Existe pas';
}


if (!isset($undef)) {
    echo 'N\' existe pas';
}

$user = [
    'username' => 'moi',
    'email' => 'moi@re-moi.fr',
];

echo $user['password']; // erreur password n'éxiste pas

if (!isset($user['password'])) {
    echo 'erreur: vous devez entrer un mot de passe';
}

// ne pas confondre isset avec is_null ($val == null)
echo '<br/>';

/*  La fct empty retourne vrai si une variable a été declarée mais pas init
 OU une variable init mais vide (0, chaine vide '', false, null)*/

$estVide;

if (empty($estVide)) {
    echo 'valeur non initalisée';
}

$chaineVide = '';
if (empty($chaineVide)) {
    echo 'ERREUR: la chaine est vide';
}
