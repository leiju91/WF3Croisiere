<?php

// ecrire une fct qui retourne le nombre de minutes depuis 
// le premier janvier de cette année
// time() retourne le timestamp (nombre de seconde depuis le 1/1/1970)
// utiliser mktime(0,0,0,1,1,2020);


function minutesDepuisJanvier()
{
    $debutMinutes = mktime(0, 0, 0, 1, 1, 2020);
    $ajd = time();
    return round($ajd - $debutMinutes) / 60;
}

echo ' Nbr de minutes depuis le 1er Janvier:' . minutesDepuisJanvier();


// Ecrire une fct qui retourne le nombre de minutes depuis un timestamp donnée en 
// paramètre

$aout152010 = mktime(0, 0, 0, 8, 15, 2010);
$juin44 = mktime(0, 0, 0, 6, 6, 1944);

function minute($date)
{
    return ((time() - $date) / 60);
}
echo 'Nombre de minutes depuis le 15 aout 2010:' . minute($aout152010);
echo 'Nombre de minutes depuis le 15 aout 2010:' . minute($juin44);


// function count($var) { ... }
// strtolower('ok');
// function strtolower($str) {}
/*
 - Ecrire une fonction qui retourne l'aire d'un rectangle avec les deux dimensions données en paramètre
 - Modifier cette fonction avec le deuxième paramètre facultatif (=0) s'il est à 0 alors ce sera l'aire d'un carré
 - Ecrire la fonction getUser qui retournera un tableau avec des données au hasard (nom, prenom, email)
 - Ecrire une seconde fonction getPrenom qui va retourner le prénom envoyé par getUser (appel de getUser dans getPrenom)
 - Ecrire la fonction getInfo avec en paramètre une chaine contenant l'info demandé ("prenom", "nom" etc.) tester si elle existe
 - getInfo('prenom');
 - Ecrire une fonction url qui demandera un lien et un nom en paramètre et qui retournera un code html avec une balise a
 - getUrl('https://oviglo.fr', 'Lien vers ma page')
 - '<a href="https://oviglo.fr">Lien vers ma page</a>
 - Appeler cette fonction dans le code html ci dessous
*/
