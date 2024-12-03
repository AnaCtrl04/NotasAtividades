<?php
session_start();

// Atualizar a última requisição
if (isset($_SESSION['usuario'])) {
    $_SESSION['usuario']['ultima_requisicao'] = date('Y-m-d H:i:s');

    echo "Usuário logado: " . $_SESSION['usuario']['login'] . "<br>";
    echo "Data/Hora de início: " . $_SESSION['usuario']['data_inicio'] . "<br>";
    echo "Última requisição: " . $_SESSION['usuario']['ultima_requisicao'] . "<br>";
    echo "Tempo de sessão ativo: " . (strtotime($_SESSION['usuario']['ultima_requisicao']) - strtotime($_SESSION['usuario']['data_inicio'])) . " segundos.<br>";
} else {
    echo "Sessão não encontrada! Faça login novamente.<br>";
    echo '<a href="session_init.php">Iniciar sessão</a>';
}

// Validar cookies
if (isset($_COOKIE['usuario']) && isset($_COOKIE['data_inicio'])) {
    echo "Dados do cookie:<br>";
    echo "Usuário: " . $_COOKIE['usuario'] . "<br>";
    echo "Data de início: " . $_COOKIE['data_inicio'] . "<br>";
} else {
    echo "Os dados do cookie foram perdidos!<br>";
    echo '<a href="session_init.php">Iniciar nova sessão</a>';
}
?>
