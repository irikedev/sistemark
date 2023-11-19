<?php
include 'src/php/protect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet " href="src/css/style.css">
    <title>Home | SISTEMA RK 1.0</title>
</head>
<body>
    <header class="header bg-primary d-flex align-items-center justify-content-between">
        <img src="src/img/logo.png" alt="logo" />
        <a href="src/php/logout.php" class="btn btn-primary" role="button">Logout</a>
    </header>
    <div class="container-style" style="padding: 0; height: calc(100vh - 5rem);">
        <form method="POST" action="_inserir_produto.php" class="p-2 w-100 bd-highlight padding">
            <h3>Cadastro Produto</h3>
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" min="1" name="nroproduto" id="exampleInputEmail" class="form-control" placeholder="Numero produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" id="exampleInputEmail" class="form-control" placeholder="Nome produto" autocomplete="off" required>
            </div>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="categoria" autocomplete="off" required>
                <option selected>Categoria</option>
                <option>Perifericos</option>
                <option>Hardwere</option>
                <option>Software</option>
                <option>Celulares</option>
            </select>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" min="1" name="quantidade" id="exampleInputEmail" class="form-control" placeholder="Quantidade" autocomplete="off" required>
            </div>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="fornecedor" autocomplete="off" required>
                <option selected>Fornecedor</option>
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
                <option>Fornecedor D</option>
            </select>
            <div class="all-btns">
                <a href="_listar_produtos.php"  class="btn btn-secondary" role="button">Produtos</a>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>