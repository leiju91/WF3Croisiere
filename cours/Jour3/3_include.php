<?php

$title = "page d'accueil";
// $title va etre utilisé dans le fichier '3b_header.php'
// include '3b_header.php';

/* include affiche un warning si le fichier n'est pas trouver 
mettre un @ devant permet de ne pas afficher de warning */

require '3b_header.php';
// fait la même chose qu'include mais affiche fatal error et met fin au programme
// remarque les variables de ce script sont accessibles dans le fichier inclus

require_once '3b_header.php'; // charger un fichier une fois et ignore les require_once suivant si c'est le même

?>
<section>
    <p>Contenu</p>
</section>

<?php
include '3b_footer.php';
?>