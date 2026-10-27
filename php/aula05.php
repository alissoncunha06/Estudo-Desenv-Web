<?php

$n1 = 8;
$n2 = 6;
$n3 = 5;


function calcularMedia($n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3) / 3;
    return $media;
}

$resultadoMedia = calcularMedia($n1, $n2, $n3);

function situacao($resultadoMedia) {
    if ($resultadoMedia >= 7){
        return 'aprovado';
    } elseif ($resultadoMedia >= 5 && $resultadoMedia < 7){
        return 'exame';
    } else {
        return 'reprovado';
    }
}

$valor = 7;
function dobrar($valor){
    $valor *= 2;
}
$situacao = situacao($resultadoMedia);
echo "Media: $resultadoMedia - $situacao<br>";
dobrar($valor);
echo $valor;


?>