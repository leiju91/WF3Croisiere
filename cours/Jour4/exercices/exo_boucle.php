<?php

$nombre = 1;

while ($nombre <= 10) {
    echo $nombre . '<br/>';
    $nombre++;
}


//nombre pair
echo 'nombres pair <br/>';
$nombre = 2;
while ($nombre <= 20) {
    echo $nombre . '<br/>';
    $nombre += 2;
}


// Afficher avec une boucle for les 10 premier jour d'avril au format "d/m/y" 
// en utilisant les function date et mk time.

for ($j = 1; $j <= 10; ++$j) {
    $timestamp = mktime(0, 0, 0, 4, $j, 2020);
    echo date("d/m/Y", $timestamp);
    echo '-- ' . '<br/>';
}

// Afficher les éléments du tableau $jours avec une boucle for

$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

for ($j = 0; $j < count($jours); ++$j) {
    echo $jours[$j] . '<br/>';
}

// pareil avec foreach

foreach ($jours as $item) {
    echo $item . '<br />';
}

// ou avec index
foreach ($jours as $index => $item) {
    echo $index . ' ' . $item . '<br />';
}

// faire une recherche dans $jours (avec foreach) qd la recherche est trouvé
// on affiche "trouvé!" et on Termine la boucle.

$recherche = 'Jeudi';

foreach ($jours as $item) {
    echo $item . '<br />';

    if ($item == $recherche) {
        echo 'Trouvé !';
        break;
    }
}


$articles = [
    [
        'title' => "Doom Eternal : Un lancement record pour la franchise d'après Bethesda",
        'date' => "2020-03-25",
        'public' => true,
    ],
    [
        'title' => "The Council : le premier épisode est disponible gratuitement sur PC, PS4 et Xbox One",
        'date' => "2020-03-25",
        'public' => false,
    ],
    [
        'title' => "Assassin's Creed Odyssey gratuit ce week-end : retrouvez notre soluce complète",
        'date' => "2020-03-20",
        'public' => true,
    ],
    [
        'title' => "Octopath Traveler célèbre ses deux millions de copies écoulées",
        'date' => "2020-03-19",
        'public' => true,
    ],
    [
        'title' => "Nintendo Direct Animal Crossing : Toutes les informations dévoilées sur New Horizons",
        'date' => "2020-02-20",
        'public' => false,
    ],
];

// explorer le tableau avec foreach et afficher les titre

foreach ($articles as $article) {

    // var_dump($articles);
    echo $article['title'];
    foreach ($article as $index => $champs) {
        echo $index . ':' . $champs . '<br/>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jours</title>
</head>

<body>
    <ul>
        <?php foreach ($jours as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>