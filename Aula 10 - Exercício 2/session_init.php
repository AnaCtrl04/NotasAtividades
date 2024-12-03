<?php
session_start();

// Inicializar os dados do usuário
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = [
        'login' => 'user_login', // Substitua por um dado de entrada
        'senha' => 'user_password', // Substitua por um dado de entrada
        'data_inicio' => date('Y-m-d H:i:s'),
        'ultima_requisicao' => date('Y-m-d H:i:s')
    ];

    // Criar cookie para armazenar usuário e hora de início
    setcookie('usuario', $_SESSION['usuario']['login'], time() + 60 * 5, '/');
    setcookie('data_inicio', $_SESSION['usuario']['data_inicio'], time() + 60 * 5, '/');

    echo "Sessão iniciada com sucesso!<br>";
    echo "Usuário: " . $_SESSION['usuario']['login'] . "<br>";
    echo "Hora de início: " . $_SESSION['usuario']['data_inicio'] . "<br>";
    echo '<a href="session_continue.php">Clique para continuar</a>';
} else {
    echo "Sessão já iniciada!<br>";
    echo '<a href="session_continue.php">Clique para continuar</a>';
}
?>
