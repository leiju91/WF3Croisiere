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

// ecrire une fonction qui retournera un seul article a partir de l'id
// utiliser le limit en mysql


function getArticle($pdo, $id)
{
    // methode pas bien !!!
    // $request = $pdo->query("SELECT * FROM article WHERE id=$id");
    // var_dump($request->fetchAll());
    // var_dump($request->fetch());

    // methode bien :)
    $request = $pdo->prepare('SELECT * FROM article WHERE id=?');
    $request->bindValue(1, $id, PDO::PARAM_INT); // la fct va tester si id est bien un entier
    $request->execute(); // execute la requete preparee
    return $request->fetch(); // retourne l'article 

}

// modifie un article
function editArticle($pdo, $id, $title, $content)
{
    $request = $pdo->prepare('UPDATE article SET title=title, content= content  WHERE id=id');
    $request->bindValue(':title', $title);
    $request->bindValue(':content', $content);
    $request->bindValue(':id', $id, PDO::PARAM_INT);
    $request->execute();
}
