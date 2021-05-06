<?php
function calcularQuadrados($numeroArea) {
    $quantidade = 1;
    $contador = $numeroArea;
    for ($contador; $contador > 0; $contador--) {
        $quantidade = $quantidade +  4 * ($contador - 1);
    }
    return $quantidade;
}

echo calcularQuadrados(3);
function verifica ($array) {     //n é o tamanho do vetor
$n = count($array);
    if ($n > 1) 
       for ($i = 1; $i < $n; $i++) 
          if ($array[$i-1] > $array[$i]) 
             return 0;     
          return 1; 
}


$largura = count([1, 3, 2, 1]);

echo verifica([1, 3]);
