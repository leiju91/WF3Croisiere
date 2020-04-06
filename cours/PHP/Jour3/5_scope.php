<?php

// Le scope est la portée d'une variable
// Une variables n'est pas accessible d'un script à l'autre si on utilise pas la fct include ou require

/*
    une variable créée dans une fct n'est pas accessible à l'ext de cette fct 
*/

function concat($a, $b)
{
    return $a . '-' . $b;
}

echo $a;
