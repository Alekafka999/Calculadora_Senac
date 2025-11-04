<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ler e sanitizar entradas (aceita vírgula ou ponto como separador decimal)
    $nota1 = isset($_POST['numero1']) ? floatval(str_replace(',', '.', $_POST['numero1'])) : 0.0;
    $nota2 = isset($_POST['numero2']) ? floatval(str_replace(',', '.', $_POST['numero2'])) : 0.0;
   
    $soma = $nota1 + $nota2;
    $subtracao = $nota1 - $nota2;   
    $multiplicacao = $nota1 * $nota2;
    $divisao = ($nota2 != 0) ? $nota1 / $nota2 : 'Divisão por zero não é permitida';
    $status = ''; 
    
    // As variáveis já estão calculadas e serão exibidas no HTML abaixo

} else {
    header('Location: formulario.html');
    exit;
}
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
</head>
<body>
<h1> Resultado do Cálculo: </h1>

<p>  Nota 1: <?php echo $nota1; ?> </p>
<p>  Nota 2: <?php echo $nota2; ?> </p>
<h2> Resultados:</h2>
<p>Soma: <?php echo number_format($soma, 2, ',', '.'); ?></p>
<p>Subtração: <?php echo number_format($subtracao, 2, ',', '.'); ?></p>
<p>Multiplicação: <?php echo number_format($multiplicacao, 2, ',', '.'); ?></p>
<p>Divisão: <?php echo is_numeric($divisao) ? number_format($divisao, 2, ',', '.') : $divisao; ?></p>

</body>
</html>