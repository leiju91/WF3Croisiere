<?php

var_dump($_POST);

// test s'il y a des données envoyées

if (!empty($_POST)) {
    $prenom = trim($_POST['prenom']);
    $nom = trim($_POST['nom']);

    if (strlen($prenom) < 3 || strlen($nom) > 60); {
        echo ' le prénom doit etre entre 3 et 60 caractères <br/>';
    }

    if (strlen($nom) < 3 || strlen($prenom) > 60); {
        echo ' le prénom doit etre entre 3 et 60 caractères <br/>';
    }

    /*
        filter_var permet de valider une chaine avec un filtre spécifique
        https://www.php.net/manual/fr/function.filter-var.php
        
    */

    // ici filter_var va tester si l'email est valide
    // nettoie la chaine en supp les caractères interdits dans le mail :
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // valide l'adresse e-mail
    $mailValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$mailValid) {
        echo "L'adresse email n'est pas valide <br/>";
        // die(); // arrete le script, aussi exit()
    }

    // pour savoir quel btn "submit" à été click
    if (isset($_POST['envois_admin']));
}
