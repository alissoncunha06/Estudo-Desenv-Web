<?php
for ($i = 1; $i <=20; $i++){
    if ($i % 3 == 0){
        continue;
    } else if ($i == 17){
        break;
    } else if ($i % 2 == 0){
        echo("$i is par<br>");
    } else {
        echo "$i is impar<br>";
    }

}

$dia = 3;
switch ($dia){
    case 1:
        echo "domingo<br>";
        break;
    case 2:
        echo "segunda<br>";
        break;
    case 3:
        echo "terca<br>";
        break;
    case 4:
        echo "quarta<br>";
        break;
    case 5:
        echo "quinta<br>";
        break;
    case 6:
        echo "sexta<br>";
        break;
    case 7:
        echo "sabado<br>";
        break;
    default:
        echo "dia invalido<br>";
        break;
}
$x = 100;
do {
    echo "$x<br>";  
} while ($x < 5);
?>