<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    
    $soma = $valor1 + $valor2 + $valor3;

    if ($valor1 > 10) {
        $cor = "blue"; 
    } elseif ($valor2 < $valor3) {
        $cor = "green";
    } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
        $cor = "red"; 
    } else {
        $cor = "black";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <h1>Informe três valores</h1>
    <form method="POST">
        Valor 1: <input type="number" name="valor1" required><br>
        Valor 2: <input type="number" name="valor2" required><br>
        Valor 3: <input type="number" name="valor3" required><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p style='color:$cor;'>Resultado da soma: $soma</p>";
    }
    ?>
</body>
</html>
