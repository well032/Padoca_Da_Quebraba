<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria Ortega</title>
    <link rel="stylesheet" href="cad.css">
</head>

<body>

    <header>

        <h1>Cadastro de Clientes | Padaria Ortega</h1>

    </header>

<main>

    <?php

    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $email = $_GET["email"];

    echo "<p> Olá $nome $sobrenome, bem vindo(a) à Padaria Ortega </p>";
    
    ?>

    <button class="text-js">
    <a href="javascript:history.go(-1)">Voltar</a>     <!-- Voltar pra página anterior -->

    </button>

</main>

</body>

</html>


