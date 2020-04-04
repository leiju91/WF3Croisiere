<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>€ to $</title>
    <meta name="description" content="">
</head>

<body>

    <?php

    if (isset($_POST['validate'])) {

        $valeur = round($_POST['montant'] *  1.085965);
        echo $valeur . ' $';
    }

    ?>

    <h3>Convertisseur d'euro en dollar</h3>

    <form action="" method="POST" name="form1">
        <input type="text" name="montant" id="montant"> € </input>
        <input type="submit" name="validate" value="Envoyer">
    </form>

</body>

</html>