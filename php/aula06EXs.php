<?php
//simular oq o php faz com um formulario de cadastro

$alunos = [
    ['nome' => '  alisson cunha ', 'email' => 'ALISSON@EMAIL.COM ', 'notas' => [8, 6, 5]],
    ['nome' => 'apolo',            'email' => ' apolo@email.com',  'notas' => [9, 7, 10]],
    ['nome' => ' taina ',          'email' => 'TAINA@email.com',    'notas' => [4, 5, 3]],
];

function calcularMedia ($notas){
    $soma = 0;
    foreach ($notas as $nota) {
        $soma += $nota;
    }
    return $soma / count($notas);
}

foreach ($alunos as $aluno){
    $nome = trim($aluno['nome']);
    $email = trim($aluno['email']);
    $email = strtolower($email);
    $media = calcularMedia($aluno['notas']);
    printf("%s (%s) - média %.2f<br>", $nome, $email, $media);
}

printf("Oi, tudo bem?<br>");
printf("Oi, %s!<br>", "Alisson");
$nome = "Neymar";
printf("Oi, %s!<br>", $nome);
printf("%s tem %s anos<br>", "Alisson", "19");
?>