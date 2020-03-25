<?php

// il est possible de créer une valeur qui ne va jamais changer
// on la declare en utilisant la fct define('NOM, "VALEUR");

define("PI", 3, 14159265359);

echo 2 * PI;

/*
 il existe des contantes proposées dans php qu'on appelle magique
elles commences et finnissent par '_'
*/

echo 'le lien du fichier est ' . __DIR__;
