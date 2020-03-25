<?php
/*
 * Complétez le script PHP suivant de manière à afficher un tableau HTML composé de $nbLignes lignes
 * et de $nbColonnes colonnes.
 * 
 * On affichera un indice dans chaque case, en commençant par 1.
 * 
 * [Facultatif] Une case sur deux sera grisée.
 */

$nbLignes = 4;
$nbColonnes = 2;

?>
<html lang="fr">

<head>
    <title>Tableau Dynamique</title>
    <style>
        .color {
            background-color: darkgrey;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php for ($ligne = 1; $ligne <= $nbLignes; ++$ligne) : ?>
                <tr>
                    <?php for ($col = 1; $col <= $nbColonnes; ++$col) :
                        $index = $col + (($ligne - 1) * $nbColonnes);
                    ?>

                        <td <?php if (0 == $index % 2) : ?> class='color' <?php endif; ?>>
                            Item 1 <?php echo $index; ?>
                        </td>
                    <?php endfor; ?>

                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>