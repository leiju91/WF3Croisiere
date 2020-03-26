<?php


$estValide = true;
$categorie = 'PHP';
$score = 10;

// A partir de ces 3 variables ecrire les conditions suivantes:
// Si $estValide est à true alors on affiche "l'article est valide"

if ($estValide) { // $estValide est un booleen, on peut le mettre directement dans la condition
    echo "L'article est valide <br/>";
}

// Si $estValide est true ET catégorie est à "php" on affiche "article PHP Valide"
if ($estValide && $categorie == 'PHP') {
    echo "Article PHP valide <br/>";
}

// Afficher le score s'il est supérieur à 5 ET si la catégorie est differente de "javascript"

if ($score > 5 && $categorie !== 'Javascript') { // teste le type de donnée
    echo $score;
}

// test avec type de données
// convertit la chîne en entier avant de tester
if (1 == '1') {
    echo 'pareil';
}

// === strictement égal, test également le tyupe (entier VS chaine => condition fausse)
if (1 === '1') {
    echo 'pareil';
}

// afficher un message " catégorie programmation" si la catégorie est égale à 'php' ou 'javascript'
// sinon si la categories est égale à "photoshop", afficher "categorie infographie"
// utiliser strtolower($categorie) pour valider "javascript", "JAVASCRIPT"...

if ($categorie == 'PHP' || $categorie == 'Javascript') {
    echo 'Catégorie programmation <br>';
} elseif ('photoshop' == strtolower($categorie)) {
    echo 'Categorie infographie <br>';
} else {
    echo 'Autre catégorie';
}


// in_array // return vrai si un élément est dans un tableau

if (in_array($categorie, ['PHP', 'Javascript'])) {
    echo 'Categorie programmation';
}
