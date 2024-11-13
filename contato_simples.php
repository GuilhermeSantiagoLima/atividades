<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (empty($nome)) {
        $erro = "Por favor, preencha o campo nome!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Por favor, preencha um endereço de e-mail válido!";
    }

    if (isset($erro)) {
        echo $erro;
    } else {
        echo "Olá $nome, agradecemos pelo seu contato. Responderemos para $email em breve.";
    }
}

?>

<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Enviar">
</form>
