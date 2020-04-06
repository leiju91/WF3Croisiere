<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation formulaire</title>
</head>

<body>
    <form action="5b_validation.php" method="POST">
        <div><label for="nom">Nom</label><input type="text" name="nom" id="nom"></div>
        <div><label for="prenom"></label>Prénom<input type="text" name="prenom" id="prenom"></div>
        <div><label for="naissance"></label>Date naissance<input type="date" name="naissance" id="naissance" value="<?= date('m-d-Y', strtotime('20 years ago')) ?>"></div>
        <div><label for="email"></label>Email<input type="email" name="email" id="email"></div>
        <button type="submit">Aller envoie la sauce !</button>
    </form>
</body>

</html>