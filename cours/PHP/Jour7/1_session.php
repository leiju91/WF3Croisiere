<?php

/*
        Les sessions permettent de conserver des données d'une page à l'autre
        - un utilisateur connecté
        - un panier de e-commerce

        Principe de fonctionnement
        - Lorsqu'un script PHP crée une session, il recupère sur le serveur les données qui sont associées 
        à l'identifiant de session  de l'utilisateur courant (token). qui est appelé "PHPSESSID"
        - Le script utilise la superglobales $_SESSION pour stocker les données

        Mise en pratique:
            - session_start() appelé à chaque debut de script, avant toute autre écriture HTML
            - $_SESSION s'utilise comme n'importe quel autre tableau 
            - session_unset() pour vider le tableau $_SESSION du sript
            - session_destroy() supprime la session stockée sur le serveur


*/

session_start(); // si cette fonction n'est pas appelée, php ne crée pas $_dession
var_dump($_SESSION);

// creer une session
$_SESSION['name'] = 'Julie';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="1b_test_sessions.php">Test Sessions</a>
</body>

</html>