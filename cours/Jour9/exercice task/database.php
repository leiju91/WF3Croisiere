<?php

// Création d'un objet PDO
$pdo = new PDO('mysql:host=localhost;port=3308;dbname=wf3_test', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$pdo->exec('SET CHARACTER SET utf8');
//var_dump($pdo->errorInfo()); // Affiche les erreurs PDO



function addTask($content)
{
    global $pdo;

    $request = $pdo->prepare('INSERT INTO task (content, date_create) 
    VALUES (:content, CURRENT_DATE())');

    $request->bindValue(':content', $content);

    return $request->execute();
}

function getAllTasks()
{
    global $pdo;
    $request = $pdo->query('SELECT * FROM task');
    return $request->fetchAll();
}


function checkTask($id)
{
    $request = $pdo->prepare('UPDATE task SET checked = 1 WHERE id=:id');
    $request->bindValue(':id', $id, PDO::PARAM_INT);
    return $request->execute();
}
