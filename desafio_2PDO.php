<?php

require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: perfil.php");
    exit;
}

?>
<h1>Atualizar Perfil</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="<?php echo $_SESSION['nome']; ?>"><br>
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>"><br>
    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha"><br><br>
    <input type="submit" value="Atualizar">
</form>
