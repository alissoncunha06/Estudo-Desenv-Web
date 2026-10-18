<?php
/* 
Os arquivos php falam com o servidor para depois o navegador 
mostrar o resultado na tela do cliente 
*/
$name = 'Alisson';
$semester = 2;

define('COURSE', 'software engineer');
echo "Hello my name is $name and I'm in the $semester nd semester of ". COURSE; 
echo "<br>";
if (defined('COURSE')){
    echo "exists";
} else {
    echo "Does not exists";
}
echo "<br> " . PHP_VERSION;

?>