<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "1234") {
        echo "Bem-vindo, $usuario!";
    } else {
        echo "Erro: Nome de usuário ou senha incorretos!";
    }
}
?>

<form method="POST">
    <label for="usuario">Nome de usuário:</label>
    <input type="text" name="usuario" id="usuario"><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha"><br>
    <input type="submit" value="Enviar">
</form>
