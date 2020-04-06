<?php
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
// Source: jeuxvideo.com

// ETAPE 1: analyser et comprendre le tableau php et le code html

// ETAPE 2: explorer le tableau et afficher seulement les titres dans le tbody du tableau html
// Attention à bien regarder le code html qui doit être dans la boucle

// ETAPE 3: afficher les dates dans un format Français (j/m/a)

// ETAPE 4: afficher le statut (public) de manière explicite => quand il est à false on affiche "Non publié", quand il est à true on affiche "Publié"
// Utiliser la class badge de Bootstrap avec des couleurs, c'est plus sympas ;)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Admin dashboard</title>
</head>

<style>
    .valid {
        color: green;
        background-color: black;
        text-align: center;
    }

    .nonValid {
        color: red;
        text-transform: uppercase;
        text-decoration: underline;
    }
</style>


<body>
    <div class="container">
        <h1>Gestion des articles</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td><?= $article['title'] ?></td>
                        <td><?= date_format(date_create($article['date']), 'd/m/Y') ?></td>
                        <td><?php if ($article['public'] === true) {
                                echo '<p class="valid">Publié !</p>';
                            } else {
                                echo '<p class="nonValid">Non Publié !</p>';
                            }
                            ?></td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>