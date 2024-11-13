<?php

if (isset($_POST['excluir'])) {
    $id = $_POST['id'];

    if (empty($id)) {
        echo "Erro: ID do produto vazio!";
        exit;
    }

    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir o produto!";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (empty($id)) {
        echo "Erro: ID do produto vazio!";
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        echo "Erro: Produto não encontrado!";
        exit;
    }

    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "Tem certeza que deseja excluir o produto {$produto['nome']}?<br>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id' value='{$produto['id']}' />";
    echo "<input type='submit' name='excluir' value='Sim, excluir!' />";
    echo "</form>";
}

