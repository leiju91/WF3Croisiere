<?php
// Variables superglobales sont des variables internes tjs dispo
// qd on envoie un formulaire en methode="GET" les valeurs seront stockees dans la superglobales $_GET
// var_dump($_GET);

if (empty($_GET['username'])) {
    echo "le nom d'utilisateur ne doit pas etre vide";
} else {
    // INSERT INTO
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec PHP</title>
</head>

<body>
    <form action="" method="get"></form>
    <div>
        <label for="name"> Name User</label>
        <input type="text" name="username" id="name">
    </div>
    <button type="submit">Envoyer</button>
</body>

</html>