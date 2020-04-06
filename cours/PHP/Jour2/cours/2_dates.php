<?php

/*  La fct date($format, $timestamp permet de formater l'affichage des dates
- $format => format de la date sous formes de chaine
- $timestamp => nbr de secondes écoulées depuis le 1/1/70 

http://php.net/manual/fr/function.date.php

*/

date_default_timezone_set('Europe/Paris'); // change le fuseau horaire
echo 'Nous somme le' . date('d/m/Y');
echo '<br/>';
echo 'Date avec heure' . date('d/m/y H i s');
echo '<br/>';
echo " il s'est eccoulé" . time() . " secondes depuis le 1 Janvier 1970";

/* 
mktime retourne un timestamp correspondant aux valeurs qui lui sont envoyées

mktime (heure, minutes, secondes, mois, jour, année);

*/

echo '<br/>';

$timestamp = mktime(12, 15, 0, 7, 14, 1889);
echo date('d/m/Y', $timestamp);

echo '<br/>';
$debutconfinement = mktime(12, 0, 0, 3, 18, 2020);
echo "on est en confinement depuis : " . date('j', (time() - $debutconfinement)) . ' jours !';

/*  EN SQL les dates sont stockees sous forme de chaine au format 'Y-m-d

*/

echo '<br/>';
$dateDB = '13-02-2013';
$dateFormate = date_create($dateDB); // retourne un objet dateTime

echo date_format($dateFormate, 'd/m/Y'); // formate un objet dateTime


$dateObject = new DateTime('2016-02-10');
echo $dateObject->format('d/m/Y');
echo '<br/>';

/* strTime transforme un texte (en anglais) en timestamp */

$time1 = strtotime('12 Octobre 2014');
echo date('d/m/Y', $time1);
echo '<br/>';

echo date('d/m/Y', strtotime('+2 weeks'));
echo '<br/>';

echo date('d/m/Y', strtotime('next Monday'));
echo '<br/>';


$dimancheDernier = new DateTime('last sunday');
echo '<br/>';

echo $dimancheDernier->format('d/m/Y');
