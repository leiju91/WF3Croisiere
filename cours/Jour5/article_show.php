<?php

require_once('data_base.php');

$pdo = getPDO();

if (!isset($_GET['id'])) {
    header("location:article_list.php");
}


$id = $_GET['id'];
$article = getArticle($pdo, 1); // recupere $_GET['id] pour afficher l'article en fct du lien
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>


<body>
    <div class='container'>
        <article>
            <header>
                <h1><?= $article['title']; ?></h1>
                <small><?= date_format(date_create($article['date_create']), 'd/m/Y'); ?></small>
            </header>
            <div>
                <?= $article['content'] ?>
            </div>
        </article>
    </div>
</body>


</html>