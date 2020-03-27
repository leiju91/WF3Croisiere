<?php

require_once('data_base.php');

$pdo = getPDO();
$article = getArticles(1); // recupere $_GET['id] pour afficher l'article en fct du lien
