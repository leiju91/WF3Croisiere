<?php
/*
tout comme en JS en fct content du code qui peu etre appelé n'importe où dans le code 

function ma Fonction($argument) {
    // code
    
    return; // non obligatoire 
    
} 

*/

/**
 * affiche la date du jour
 */
function echoDate()
{
    echo date('d/m/Y');
}

// On appelera la fct comme cece
echoDate();

/**
 * salue un membre.
 */
function salutation($surname)
{
    echo 'Bonjour ' . $surname;
}

salutation('Albert');
echo '<br/>';
salutation('Charles');


function salutationPrecise($name, $mode)
{
    $message = '';
    if ($mode == 'normal') {
        $message = 'Bonjour';
    } elseif ($mode == 'pirate') {
        $message = "Hârrrr ol'";
    }
    echo $message . ' ' . $name;
}
echo '<br/>';
salutationPrecise('Asterix', 'normal');
echo '<br/>';
salutationPrecise('Peter', 'pirate');
/*
rendre des arguments non obligatoire
*/

function salutationPrecise2($name, $mode = 'normal')
{
    //meme code il est possible d'appeler une fct dans une autre
    salutationPrecise($name, $mode);
}

echo '<br/>';

// on est pas obligé de renseigner la valeur $mode, elle sera à 'normal' par default
salutationPrecise2('Jean');

/* les arguments facultatifs doivent etres placés en dernier
function maFunction($param1, $param2 = 0, $param3) {}
maFonction("ok", , 100); // Je dois quand même renseigner le param2 pour definir param 3
*/

// si l'utilisateur est admin
function estAdmin($roles)
{
    // si la position de la chaine admin ne retourne pas false
    return false != strpos($roles, 'ADMIN');
}

echo '<br/>';
echo estAdmin('USER,ADMIN') ? 'Vous etes Admin' : "vous n'etes rien";

// une fct peut retourner une valeude n'importe q'uel type

function getArray()
{
    return [
        'val1' => 'yes',
        'val2' => 'no',
    ];
}

function connexion(string $username, string $password): bool
{
    // CODE
    return false;
}

connexion('login', 'pass');
