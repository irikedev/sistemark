<?php
include 'src/php/connect_db_estoque.php';
$id = $_POST['id'];

// $nroproduto = $_POST['nroproduto']; <- bug
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
$atualizar = mysqli_query($conexao,$sql);

header("Location: _listar_produtos.php");
?>