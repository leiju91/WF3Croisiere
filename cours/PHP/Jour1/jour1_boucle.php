<?php
// boucle for
for ($i = 1; $i <= 10; ++$i) {
    echo $i . '<br/>';
}

$i = 0;
while ($i < 10) {
    echo $i . '<br/>';
    ++$i;
}

$commande = [
    'produit 1',
    'produit 2',
    'produit 3',
    'produit 4',
];

for ($i = 0; $i < count($commande); ++$i) {
    echo $commande[$i] . '<br/>';
}
echo '<hr>';
// Foreach
// pour chaque éléments du tableau
foreach ($commande as $produit) {
    echo $produit . '<br/>';
}

$commande = [
    'produit 1' => 'DVD',
    'produit 2' => 'Jeux Vidéo',
    'produit 3' => 'Livre',
    'produit 4' => 'Lego',
];

// $key = index de l'élément du tableau
foreach ($commande as $key => $produit) {
    echo $key . ':' . $produit . '<br/>';
}

// Foreach jusqu'au produit 3
foreach ($commande as $key => $produit) {
    if ('DVD' == $produit) {
        continue; // on passe a l'étape suivante
    }
    echo $key . ':' . $produit . '<br/>';

    if ($key == 'produit 3') {
        break; // stop la boucle
    }
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>3 - Boucles</title>
</head>

<body>

</body>

</html>