<?php

function convert()
{
    if (isset($_POST['convert'])) {

        $valeur = $_POST['amount'] *  1.085965;
        return $valeur . '€';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercice 2</title>
</head>

<body>
    <div class="container">
        <h1> On part en voyage</h1>
        <h3 class="display-4">Convertir des Euro en Dollar</h3>
        <form method="POST" id="currency-form">
            <div class="form-group">
                <label>De</label>
                <select name="from_currency">
                    <option value="EUR">Euro</option>

                </select>
                <label></label>
                <input type="text" placeholder="Montant à convertir" name="amount" id="amount" />
                <label>A</label>
                <select name="to_currency">
                    <option value="USD">US Dollar</option>

                </select>
                <button type="submit" name="convert" id="convert" class="btn btn-dark">Convertir</button>
            </div>
        </form>
        <p>Résultat : <?php echo $valeur . '$'; ?></p>
    </div>
</body>

</html>