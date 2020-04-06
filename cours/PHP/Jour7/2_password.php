<?php


/** Dans une base de donnée un mdp n'est jamais entré sans etre cripté
 * - md5($password) obsolète
 * - password_hash($password, PASSWORD_DEFAULT)
 * - password_verify ($password, $passwordCrypt)
 *
 * 
 * 
 * 
 */

$password = password_hash('monMotDePasse', PASSWORD_DEFAULT);
echo $password;
echo '<br/>';

// test si le mdp est bon
if (password_verify('test', $password)) {
    echo 'le mot de pass est correct';
}

// autre

$key = 'Vive webforce 3';

$password = md5('monMotDePasse' . $key);
if (md5('passwordATester' + $key) == $password) {
}
