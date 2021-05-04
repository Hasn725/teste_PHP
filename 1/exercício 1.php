<?php
function exibirSeculo($ano)
{
    $ano;
    if($ano%100 !=0){
        $ano =  $ano/100+1;
    }else{
        $ano = $ano/100;
    }

    echo (int) $ano;
}

exibirSeculo(1900);