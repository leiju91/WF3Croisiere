<?php

$object = 'une tasse de café';
$message = 'Je voudrai' . $object . ' pour bien démarrer la journée.';

// Anti slashes pour mettre une apostrophe
$message2 = 'Rien de tel qu\'' . $object . ' pour etre en forme.';

// Double quotes
$message3 = "Rien de tel qu'" . $object . ' pour etre en forme.';

// inclure une variables dans une chaine à double quote
// ATTENTION: Ne fonctionne pas avec de simple quotes
$message4 = "Rien de tel qu' $object pour etre en forme.";

echo $message;
echo '<br/>';

// Nbr de caractères
echo "Il y a " . strlen($message4) . " caractères";
echo '<br/>';
echo substr($message3, 10, 20); // Retourne une chaine a partir de 10 char de longeur 20.

$messageMaj = strtoupper($message); // Majuscule
$messageMin = strtolower($message); // Minuscule
$messageMajMot = ucwords($message); // Met chaque premiere lettre des mots en maj
$messageMajPremiereLettre = ucfirst($message); // 1ere lettre en mal
$position = strpos($message, 'journée'); // Retourne la pos de la sous chîne journée
// return false si pas trouvée
// if (strpo($message,'journée')) {}

echo $position;
$msgThe = str_replace('café', 'thé', $message2); //Remplacement de mot

$html = '<a href="#">Clique sur mon super lien</a>';
echo '<br/>';
echo $html;

$html2 = '<script>alert("ahah");</script>'; // ATTENTION FAILLE XSS
echo strip_tags($html2); // enleve les balises html
// strip_tags($chaine,'<a><p>'); sauf balise a et p !
echo '<br/>';
echo htmlentities($html2); // transforme les balises html en caracteres spéciaux

$arrayOfString = explode(' ', $message); // decoupe une chaine de caractere en fct d'un separateur : ici ','
var_dump($arrayOfString);

// mot clas

$motsCles = 'php, javascript, bootstrap 4, symfony 4';
$motClesArray = explode(',', $motsCles);
var_dump($motClesArray);

trim('HELLO'); // retourne la chaine sans les espaces au début et à la fin
$nouveauxMots = implode(',', $motClesArray); // inverse d'explode

$avecSlashes = addslashes($message); // ajoute des '\' devant les apostrophes
echo $avecSlashes;

stripslashes($message); // retire les '\'
