<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com get</title>
</head>
<body>
    <form action="#" method="post">
        Nome: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

    <?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    echo "Voce digitou: " . $nome;
    ?>
</body>
</html>