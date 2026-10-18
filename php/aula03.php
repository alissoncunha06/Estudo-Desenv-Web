<?php

$nota = 6.5;
$frequencia = 80;
if ($nota >= 7 && $frequencia >= 75) {
    echo "aprovado<br>";
} else {
    echo "reprovado<br>";
}

$x = 10;
$y = "10";
if ($x == $y){
    echo "true<br>";
} else {
    echo "false<br>";
}

if ($x === $y) {
    echo "sao o mesmo tipo e valor<br>";
} else {
    echo "sao diferentes<br>";
}
?>