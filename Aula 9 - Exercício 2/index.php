<!DOCTYPE html>
<html>
<head>
    <title>Teste de Divisibilidade por 2</title>
</head>
<body>
    <form method="post">
        <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<p>Valor divisível por 2</p>";
        } else {
            echo "<p>O valor não é divisível por 2</p>";
        }
    }
    ?>
</body>
</html>
