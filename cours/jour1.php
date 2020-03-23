<!DOCTYPE html>
<html lang="fr">

<head>
    <title>1 - Les Variables</title>
</head>

<body>


    <?php

    // Déclarer une variable
    $prenom = "Pierre";

    // NB
    $age = 31;
    // NB décimal
    $taille = 1.80;

    // Booléen

    $estAdmin = true;

    /*
Une variable ne doit pas commencer par un chiffre
$0var -> erreur
Peut contenir des underscrores _
et des caracteres ASCII
senssible à la casse
*/

    // echo => afficher
    echo $prenom;
    // Tableaux
    // Ancienne méthode
    $fruits = array('pommes', 'poires', 'bananes');

    // New !
    $fruits = ['pommes', 'poires', 'bananes'];
    // Best !
    $fruits = [
        'pommes',
        'poires',
        'bananes'
    ];

    // saisir les index (clés)
    $aliments = [
        'pomme' => 'fruit',
        'poire' => 'fruit',
        'poireau' => 'légume',
    ];

    // ajouter une valeur
    $aliments[] = 'Noix de coco'; // js => push

    // afficher des variables detaillées
    var_dump($aliments);

    /******************
     * Opérateurs
     *****************/

    $a = 2;
    $b = 5;
    $c = 7;

    // add
    $res = $a + $b;

    // Multiplication
    $res = $a * $b;

    // division
    $res = $a / $b;

    // soustraction 
    $res = $a - $b;

    // modulo

    $res = $b % $a; // Reste de la division
    $a += 10; // revien à => $a = $a +10;
    $a *= 2;
    $a++; // Incrementation de 1

    echo $a;
    echo "<br/>"; // saute une ligne
    echo $a++; // affiche $a et ensuite ajoute 1
    echo "<br/>";
    echo $a;
    echo "<br/>";
    echo ++$a; // incremente avant et affiche

    $b = $a++; // Mettre ma valeur de $a dans $b et ensuite va incrémenter $a
    $pow = $a ** $b; // Puissance
    echo '<hr/>';
    // la fonction gettype() permet d'afficher le type d'une variable
    echo '$a est de type' . gettype($a) . "<br/>";

    // Autre méthode pour afficher des tableaux 
    print_r($aliments);


    ?>
</body>

</html>