<?php
/*
    POUR la gestion des bases de donnés en php
    On utilise la bibli PDO (PHP DATA OBJECT)
    lors de la creation e l'object PDO , il faut lui envoyer les parametres suivants
    - Date source name (DSN): chaine de caractere qui resume les "parametre de connextion à la base de données
    - Nom d'utilisateur
    - MDP
    http://php.net/manual/fr/ref.pdo-mysql.connection.php
 */

// creation de la chaine de connexion
$dsn = 'mysql:host=localhost;port=3308;dbname=wf3_test';
// creation d'un objet PDO avec le DSN, user, 
$pdo = new PDO($dsn, 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Création table article
$query = '
CREATE TABLE article (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(80) NOT NULL,
    date_create DATE NOT NULL,
    content TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB;
';

// Execution de la requete
// $pdo->exec($query); // veut dire on appel l'objet pdo

//Insertion de données
$query = "INSERT INTO article (title, date_create, content)
VALUES ('Premier article', '2020-03-27', 'Mon super article')";
// $pdo->exec($query);

$title = "Deuxieme article";
$date = "2019-12-01";
$content = "Mon super article";

$prep = $pdo->prepare("INSERT INTO article (title, date_create, content)
VALUES (?,?,?)");

// remplace les inconnus (?) par des variables PHP
// PASSER PAR BINDVALUE PERMET A PDO DE CONTRÖLER LES VALEURS5EVITE LES INJECTION sqL)
$prep->bindValue(1, $title);
$prep->bindValue(2, $date);
$prep->bindValue(3, $content);

// execute
// $prep->execute();

//var_dump($pdo->errorInfo()); // affiche les erreurs
// $articleSelect = $pdo->prepare("SELECT*FROM article");
// $articleSelect->execute();
// $articles = $articleSelect->fetchAll(); // insere le result de la requete ds $articles

// autrement

$request = $pdo->query("SELECT * FROM article")
$articles = $request->fetchAll(PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

var_dump($articles);
