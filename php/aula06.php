<?php
$cores = ["amarelo", "vermelho", "azul"]; // jeito curto
$cores = array("vermelho", "vermelho", "azul"); //outro jeito

echo $cores[0];
$cores [] = "verde"; //adicionar no fim da array
echo "<br>$cores[3]<br>";

// array assiociativo (o dicionario em python)

$usuario = [
    'nome' => 'Alisson',
    'email' => 'alisson@gmail.com',
    'idade' => 20
];

echo "Nome: $usuario[nome]<br> Idade: $usuario[idade]<br>";
 
// array dentro de array (multidimensional)
echo "<br>";

/*
array associoativo eh oq o banco devolve quando voce busca 
varios registros: uma lista, onde cada item eh um array associativo
*/

$usuarios = [
    ['nome' => 'Alisson', 'cidade' => 'Curitiba'],
    ['nome' => 'Neymar', 'cidade' => 'Santos']
];
echo $usuarios[1]['nome'];
echo "<br>";
//for each pra percorrer o array
foreach ($cores as $cor){
    echo "Cor: $cor<br>";
};

//for each para array associativo
foreach ($usuario as $key => $value){
    echo "$key: $value<br>";
}

$total_users = count($usuarios);
// array_push($arr, 'x'); adiciona no fim da array
$oi = "<br>    oi  ";
trim($oi); //tira os espacos
echo $oi;

//mostrar numero formatado

$media = 6.33333;
printf("Media: %.2f", $media); //Media: 6.33




?>