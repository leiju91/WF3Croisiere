<?php

$object = 'une tasse de café';
$message = 'Je voudrai' . $object . ' pour bien démarrer la journée.';

// Anti slashes pour mettre une apostrophe
$message2 = 'Rien de tel qu\'' . $object . ' pour etre en forme.';

// Double quotes
$message3 = "Rien de tel qu'" . $object . ' pour etre en forme.';

// inclure une variables dans une chaine à double quote
// ATTENTION: Ne fonctionne pas avec de simple quotes
$message4 = "Rien de tel qu' $object pour etre en forme.";

echo $message;
echo '<br/>';

// Nbr de caractères
echo "Il y a " . strlen($message4) . " caractères";
echo '<br/>';
echo substr($message3, 10, 20); // Retourne une chaine a partir de 10 char de longeur 20.
