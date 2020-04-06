<?php

$pdo = new PDO('mysql:host=localhost;port=3308;dbname=nomsanimaux', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$pdo->exec('SET CHARACTER SET utf8');


function getRandomName($pdo)
{
    $request = $pdo->query('SELECT * FROM nomanimaux ORDER BY RAND() LIMIT 1');
    return $request->fetch();
}
