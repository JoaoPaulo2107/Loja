<?php
    require 'conexao.php';

    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $estoque = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $estoque);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <?php if ($stmt->execute()): ?>
            <h2 class="text-success">Produto inserido com sucesso!</h2>
        <?php else: ?>
            <h2 class="text-danger">Erro ao inserir produto.</h2>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary mt-4">Voltar ao Início</a>
    </div>
</body>
</html>
