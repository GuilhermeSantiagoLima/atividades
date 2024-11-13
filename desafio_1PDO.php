<?php

// Conexão com o banco de dados
$dsn = 'mysql:host=localhost;dbname=produtos';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco: ' . $e->getMessage();
    exit;
}

// Criação da tabela produtos
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT NOT NULL
)";

try {
    $pdo->exec($sql);
} catch (PDOException $e) {
    echo 'Erro ao criar a tabela: ' . $e->getMessage();
    exit;
}

// Formulário para cadastrar novos produtos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos (nome, descricao, preco, estoque) VALUES (:nome, :descricao, :preco, :estoque)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':estoque' => $estoque
        ]);
        echo "Produto cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo 'Erro ao cadastrar o produto: ' . $e->getMessage();
    }
}

?>
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome"><br>
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao"></textarea><br>
    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" step="0.01"><br>
    <label for="estoque">Estoque:</label>
    <input type="number" name="estoque" id="estoque"><br>
    <input type="submit" value="Cadastrar">
</form>
