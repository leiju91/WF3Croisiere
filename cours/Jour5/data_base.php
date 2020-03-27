<?php

/**
 * écrire une function "$getpdo"
 *  qui va creer et retourner un objet PDO 
 *  avec les bon parametres.
 */

function getPDO()
{
    $dsn = 'mysql:host=localhost;port=3308;dbname=wf3_test';
    $pdo = new PDO($dsn, 'root', '');
    $pdo->exec('SET CHARACTER SET utf8');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
}

/**
 *  Ecrire une fct avec l'objet PDO en param qui retourne tous les articles
 * 
 */

/**
 * retourne tous les articles @param $pdo Object PDO
 */

function getArticles($pdo)
{

    $request = $pdo->query("SELECT * FROM article"); // execute une requete et retourne un PDOStatement
    return $request->fetchAll();
}

// ecrir nhe fonction qui retournera un seul article a partire de l'id
// utiliser le limlit en mysql
function getArticle($id)
{
}
