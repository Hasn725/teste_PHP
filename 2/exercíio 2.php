<?php

$texto = strtoupper("a");
//AABAA

$inverso = strrev($texto);
//AABAA

if($texto==$inverso){
    echo "true";
}else{
    echo "false";
}
function Palindromo($textoUsuario){
    $texto = strtoupper($textoUsuario);
    //AABAA

    $inverso = strrev($texto);
    //AABAA

    if($texto==$inverso){
        echo "true";
    }else{
        echo "false";
    }
}
