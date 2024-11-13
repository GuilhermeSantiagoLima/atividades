<?php

$usuarioCorreto = "admin";
$senhaCorreta = "123456";

if ($_POST["usuario"] == $usuarioCorreto && $_POST["senha"] == $senhaCorreta) {
    echo "Login bem-sucedido!";
} else {
    echo "Nome de usuário ou senha incorretos!";
}
