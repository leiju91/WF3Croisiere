<?php

$infos = [
    [
        'prenom' => "Henry",
        'nom' => "Ozzy",
        'adresse' => "3, rue de la citée",
        'cp' => "57950",
        'ville' => "Vénelange",
        'email' => "henrydelacity@sfr.fr",
        'telephone' => "03.82.65.41.27",
        'date_naissance' => "1974-05-06",
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Exo 1 </title>
</head>

<body>
    <div class="container">
        <h1 class="display-1 bg-warning rounded p-3">On se présente ! </h1>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infos as $info) : ?>
                    <tr>
                        <td><?= $info['nom'] ?></td>
                        <td><?= $info['prenom'] ?></td>
                        <td><?= $info['adresse'] ?></td>
                        <td><?= $info['cp'] ?></td>
                        <td><?= $info['ville'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['telephone'] ?></td>
                        <td><?= date_format(date_create($info['date_naissance']), 'd/m/Y'); ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>