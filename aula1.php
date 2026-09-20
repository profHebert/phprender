<?php
header('Content-Type: text/html; charset=utf-8');

$nomeAluno = "Estudante";
$dataAtual = date("d/m/Y H:i:s");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 1 - PHP</title>
</head>
<body>
    <h2>Aula 1: Variáveis e Saída de Dados</h2>
    <p>Olá, <strong><?php echo $nomeAluno; ?></strong>!</p>
    <p>Data e hora no servidor Vercel: <?php echo $dataAtual; ?></p>
</body>
</html>
