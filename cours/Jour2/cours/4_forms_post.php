<?php

if (!empty($_POST)) {
    $sql = "SELECT * FROM user WHERE login = '" . $_POST['username'] . "' AND password ='" . $_POST['password'] . "'";
    echo $sql;

    /*  attention, injection SQL
    si l'utilisateur entre dans le champ username  "' OR TRUE--"
    la requete va retourner tout les utilisateurs sans tester le mot de passe qui devient un commentaire
    */
    $username = addslashes($_POST['username']);
    $sql = "SELECT * FROM user WHERE login = '" . $_username . "' AND password ='" . $_POST['password'] . "'";
    echo '<br/>';
    echo $sql;
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="username">Nom Utilisateurs</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">MDP</label>
            <input type="text" name="password" id="password">
        </div>
        <button type="submit">Taupe la</button>
    </form>

</body>

</html>