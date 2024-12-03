<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $SALARIO1 = $_POST['SALARIO1'];
    $SALARIO2 = $_POST['SALARIO2'];

    $SALARIO2 = $SALARIO1;
    $SALARIO2++;

    // Adiciona 10%
    $SALARIO1 += $SALARIO1 * 0.10;

    // laço de repetição de 100 vezes
    for ($i = 1; $i <= 100; $i++) {
        $SALARIO1++; // Incrementa 1 
        
        // se a iteração é a 50 e para o loop
        if ($i == 50) {
            break;
        }
    }

    echo "Valor Salário 1: " . $SALARIO1 . " e Valor Salário 2: " . $SALARIO2 . "<br>";

    if ($SALARIO1 < $SALARIO2) {
        echo "O salário 1 é menor que o salário 2: " . $SALARIO1;
    }

    if ($SALARIO1 > $SALARIO2) {
        echo "<br>O salário 1 é maior que o salário 2";
    } elseif ($SALARIO1 < $SALARIO2) {
        echo "<br>O salário 1 é menor que o salário 2";
    } else {
        echo "<br>Os valores são iguais";
    }
} else {

    echo '
        <form method="post">
            <label for="SALARIO1">Digite o Salário 1:</label><br>
            <input type="number" id="SALARIO1" name="SALARIO1" required><br><br>
            
            <label for="SALARIO2">Digite o Salário 2:</label><br>
            <input type="number" id="SALARIO2" name="SALARIO2" required><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    ';
}
?>
