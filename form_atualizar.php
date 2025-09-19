<?php
    include 'cabecalho.php';
    require 'conexao.php';

    // Recebe o ID do produto
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Busca o produto no banco
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$produto) {
            echo "<div class='container'><p>Produto não encontrado!</p></div>";
            exit;
        }
    } else {
        echo "<div class='container'><p>ID inválido!</p></div>";
        exit;
    }

    // Se o formulário foi enviado (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        $sql = "UPDATE produtos 
                SET nome = :nome, preco = :preco, quantidade = :quantidade 
                WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: listar.php");
            exit;
        } else {
            echo "<div class='container'><p>Erro ao atualizar produto!</p></div>";
        }
    }
?>
<body>
    <div class="container">
        <h2>ATUALIZAÇÃO DE PRODUTO</h2>
        <form method="POST">
            <div class="mb-3">                
                Nome: <input value="<?php echo $produto['nome']; ?>" type="text" name="produto" class="form-control" required>                
            </div>
            <div class="mb-3">                
                Preço: <input value="<?php echo $produto['preco']; ?>" type="number" step="0.01" name="preco" class="form-control" required>                
            </div>
            <div class="mb-3">                
                Quantidade: <input value="<?php echo $produto['quantidade']; ?>" type="number" name="quantidade" class="form-control" required>                
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="listar.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
