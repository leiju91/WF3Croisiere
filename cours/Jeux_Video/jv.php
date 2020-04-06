<?php

$pdo = new PDO('mysql:host=localhost;port=3308;dbname=jeux_video', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$pdo->exec('SET CHARACTER SET utf8');


function getJeuxVideo()
{
    global $pdo;
    $request = $pdo->query("SELECT * FROM jeux_video");
    $request->execute();

    return $request->fetchAll();

    var_dump($request->errorInfo());
}

var_dump(getJeuxVideo());

$pdo->exec("INSERT INTO jeux_video(nom , possesseur, console, prix, nbre_joueurs_max, commentaires)
VALUES ('Final Fantasy IX', 'Julie', 'PS1', 90, 1, 'Mon ff préféré')");
