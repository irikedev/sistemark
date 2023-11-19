<?php 
include 'src/php/connect_db_estoque.php'; //connect database
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="src/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Editar | SISTEMA RK 1.0</title>
</head>
<body>
    <div class="container container-style" style="margin-top: 4rem;">
        <form method="POST" action="_atualizar_produto.php" >
            <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
            <h3>Editar Produto</h3>
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" id="exampleInputEmail" class="form-control" value="<?php echo $nroproduto?>" disabled>
                <input type="number" name="id" id="exampleInputEmail" class="form-control" value="<?php echo $id?>" style="display: none;">

            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" id="exampleInputEmail" class="form-control" value="<?php echo $nomeproduto?>">
            </div>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="categoria" value="<?php echo $categoria?>">
                <option selected>Categoria</option>
                <option>Perifericos</option>
                <option>Hardwere</option>
                <option>Software</option>
                <option>Celulares</option>
            </select>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" id="exampleInputEmail" class="form-control" placeholder="Quantidade" value="<?php echo $quantidade?>">
            </div>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="fornecedor" value="<?php echo $fornecedor?>">
                <option selected>Fornecedor</option>
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
                <option>Fornecedor D</option>
            </select>

            <div class="all-btns">
                <a href="_listar_produtos.php"  class="btn btn-secondary" role="button">Voltar</a>
                <button type="submit" class="btn btn-success">Atualizar</button>
            </div>
        </form>
        <?php }?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>