<?php
include 'src/php/connect_db_estoque.php';
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto', '$categoria',$quantidade, '$fornecedor')";
$insert = mysqli_query($conexao,$sql);
header("Location: Home.php");
?>
<!-- <style>
    i{margin-right: .5rem;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container d-flex align-item-center justify-content-center flex-column" style="width: 500px; padding-top: 40px;">
    <h1 class="fs-3">Produto adicionado com sucesso!</h1>
    <div class="d-flex align-items-center" style="padding-top: 20px;">
        <a href="index.php" role="button" class="btn btn-xl btn-primary" style="margin-right: .5rem; padding: .5rem 1rem;"><i class="fa-solid fa-cart-plus"></i>Cadastrar novo Produto</a>
        <a href="_listar_produtos.php" role="button" class="btn btn-xl btn-primary" style="margin-left: .5rem; padding: .5rem 1rem;"><i class="fa-solid fa-rectangle-list"></i>Listar Produtos</a>
    </div>
</div> -->