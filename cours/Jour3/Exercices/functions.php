<?php

function getRealString(string $str): string
{
    return trim($str);
}

// affiche un élément HTML AVEC UN UTILISATEUR
/** @param string $nom 
 *  @param string $img
 *  @return string code html
 */
function getAccountButton(string $nom, string $img)
{
    return '<section><span>' . $nom . '</span><img src="' . $img . '" alt="avatar"</section>';
}

/**
 * Retourne une liste html à partir d'un tableau.
 *
 * @param array $items éléments du menu
 *
 * @return string code html de la liste
 */
function getListMenu(array $items) // array devant un paramètre indique qu'on demande un tableau et pas autre chose
{
    // <ul> foreach <li></li> fin de foreach </ul>
    $html = '<ul>';
    // Items (boucle)
    foreach ($items as $item => $url) {
        $html .= '<li><a href="' . $url . '">' . $item . '</a></li>'; // Ajoute les balises li à l'html
    }

    $html .= '</ul>'; // $html = $html . '</ul>';

    return $html;
}
