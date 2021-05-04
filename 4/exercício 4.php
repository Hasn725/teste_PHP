<?php
function verifica($array) {
    $n = count($array);
        if ($n > 1) 
           for ($i = 1; $i < $n; $i++) 
              if ($array[$i-1] >= $array[$i]) 
                 return false;
            return true; 
}

function verificaSequecial($arrays)
{
    for($contador = 0; $contador < count($arrays); $contador++){
        $arrayAux = [];
        $arrayAux = $arrays;
        unset($arrayAux[$contador]);
        for($contador2 = 0; $contador2<count($arrayAux); $contador2++){
            if(!isset($arrayAux[$contador2])){
                $arrayAux[$contador2] = $arrayAux[$contador2+1];
                unset($arrayAux[$contador2+1]);
            }
        }
        if(verifica($arrayAux)==1){
            return true;
        }
    }
    return false;
}