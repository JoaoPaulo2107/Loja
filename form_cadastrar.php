<?php
    include 'cabecalho.php';
?>
<head>
    <style>
        body {
            background-color: #ADD8E6;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-control {
            border-radius: 4px;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .form-control::placeholder {
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>CADASTRO DE PRODUTO</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">                
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto">                
            </div>
            <div class="mb-3">                
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto">                
            </div>
            <div class="mb-3">                
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade">                
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
