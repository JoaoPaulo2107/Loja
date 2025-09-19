<?php
    include 'cabecalho.php';
?>
<body>    
    <div class="container">
        <h2>Lista de produtos</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$produto['id']."</td>";
                    echo "<td>".$produto['nome']."</td>";
                    echo "<td>R$ ".number_format($produto['preco'], 2, ',', '.')."</td>";
                    echo "<td>".$produto['quantidade']."</td>";
                    echo "
                    <td>
                        <a href='form_atualizar.php?id=".$produto['id']."' class='btn btn-primary me-2'>Atualizar</a>
                        <a href='apagar.php?id=".$produto['id']."' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja apagar este produto?\")'>Apagar</a>
                    </td>
                    ";
                    echo "</tr>";                                        
                }                  
            ?>                                
            </tbody>
        </table>
    </div>
</body>
</html>
