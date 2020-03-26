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

//function getListMenu(array $items)
//{
//for ($i = 0; $i < $items; ++$i)
//return '<ul><li><a>' . $items . '</a></li></ul>';
//}

