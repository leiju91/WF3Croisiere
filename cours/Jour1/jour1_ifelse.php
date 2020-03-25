<?php

// Condition

$estAdmin = true;

if ($estAdmin) {
    echo 'vous etes admin !';
} elseif (!$estAdmin) {
    echo "vous n'etes pas admin !";
} else {
    echo "Ne s'affichera jamais";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title> 2 - Les Conditions</title>
</head>

<body>
    <!-- <?php if ($estAdmin) { ?> 
        <a href="#">Administration</a>
    <?php } ?>-->

    <?php if ($estAdmin) : ?>
        <a href="#">Administration</a>
    <?php endif; ?>
    <hr />
    <?php
    $a = 15;
    $b = 30;

    if ($a == $b) {
        echo "ce sont les memes valeurs";
    }

    // yoda condition
    if (15 == $a) {
    }

    if ($a >= $b) {
        echo 'a est plus grand ou égal à b';
    } else {
        echo 'a est plus petit que b';
    }

    $compte = 'admin';
    // égalité chaîne
    if ('admin' == $compte) {
    }

    // different
    if ($a != $b) {
    }
    /* 
        == test d'égalité
        === identique (strictement égale) test si les valeures sont égales 
        et si elles sont du même type.
*/
    if (true == $compte) {
        echo '<br/>la chaine est vraie';
    }
    ?>
</body>

</html>