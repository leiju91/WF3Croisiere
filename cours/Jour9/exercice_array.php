<?php

/*
 - Afficher le prix du troisième produit
 - Afficher le nom du premier produit
 - Afficher le nombre de tags du deuxième produit
 - Créer un tableau html qui affiche tous les nom et prix des produits
 - Ajouter une colonne qui affiche chaques tags dans une balise span
 
*/
$products = [
    [
        'name' => "Animal Crossing New Horizon",
        'price' => 44.99,
        'tags' => ['Jeux vidéo'],
    ],
    [
        'name' => "Joker",
        'price' => 24.90,
        'tags' => ['Blu-Ray', 'Joaquin Phoenix', 'Robert De Niro'],
    ],
    [
        'name' => "La Vie secrète des écrivains",
        'price' => 8.40,
        'tags' => ['Livre', 'Musso'],
    ],
];


// Afficher le prix du troisième produit
echo $products[2]['price'];
echo '<br/>';

// Afficher le nom du premier produit
echo $products[0]['name'];
echo '<br/>';

// Afficher le nombre de tags du deuxième produit
echo count($products[1]['tags']);
echo '<br/>';

// Afficher le 2eme tags du deuxieme produit
echo $products[1]['tags'][1];
echo '<br/>';

// Créer un tableau html qui affiche tous les nom et prix des produits
foreach ($products as $product) {
    echo $product['name'];
    echo $product['price'] . ' €';
    echo '<br/>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Liste des produits</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Hashtag</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] . ' €' ?></td>
                        <td>
                            <?php $tags = $product['tags']; ?>
                            <?php foreach ($tags as $tag) : ?>
                                <span><?= $tag ?></span>
                            <?php endforeach ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>