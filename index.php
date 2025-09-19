<?php
    include 'cabecalho.php';
?>
<head>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .btn-group .btn {
            margin: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container">        
        <div class="text-center">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="form_cadastrar.php" type="button" class="btn btn-danger">Cadastrar</a>
                <a href="listar.php" type="button" class="btn btn-warning">Listar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzA
