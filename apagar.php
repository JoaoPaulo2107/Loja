<?php
    require 'conexao.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: listar.php");
            exit;
        } else {
            echo "Erro ao apagar produto.";
        }
    } else {
        echo "ID inválido.";
    }
?>
