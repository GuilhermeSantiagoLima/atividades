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

// Página atual
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Quantidade de registros por página
$registrosPorPagina = 10;

// Calcular o offset
$offset = ($pagina - 1) * $registrosPorPagina;

// Consulta para buscar os produtos com paginação
$sql = "SELECT * FROM produtos LIMIT $registrosPorPagina OFFSET $offset";

// Preparar a consulta
$stmt = $pdo->prepare($sql);

// Executar a consulta
$stmt->execute();

// Buscar os produtos
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total de registros
$sql = "SELECT COUNT(*) as total FROM produtos";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$total = $stmt->fetch()['total'];

// Quantidade de páginas
$quantidadeDePaginas = ceil($total / $registrosPorPagina);

?>

<h1>Lista de Produtos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Estoque</th>
    </tr>
    <?php foreach ($produtos as $produto) { ?>
    <tr>
        <td><?php echo $produto['id']; ?></td>
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['descricao']; ?></td>
        <td><?php echo $produto['preco']; ?></td>
        <td><?php echo $produto['estoque']; ?></td>
    </tr>
    <?php } ?>
</table>

<?php if ($quantidadeDePaginas > 1) { ?>
    <p>
        <?php for ($i = 1; $i <= $quantidadeDePaginas; $i++) { ?>
            <a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a> |
        <?php } ?>
    </p>
<?php } ?>
