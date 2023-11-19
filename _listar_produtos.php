<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | SISTEMA RK 1.0</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <header class="header bg-primary d-flex align-items-center justify-content-between">
    <img src="src/img/logo.png" alt="logo" />
    <a href="src/php/logout.php" class="btn btn-primary" role="button">Logout</a>
  </header>
  <div class="container container-style" style="margin-top: calc(5rem - 2rem); padding: 3rem;">
    <div class="thead">
      <h3>Lista Produtos</h3>
      <a href="Home.php" class="btn btn-secondary" role="button">Voltar</a>
    </div>
    <br>
      <table class="table" id="tabelaProdutos">
    <thead>
      <tr>
        <th scope="col">NRO Produto</th>
        <th scope="col">Nome Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php
          include 'src/php/connect_db_estoque.php';
          $sql = "SELECT * FROM `estoque`";
          $busca = mysqli_query($conexao,$sql);
          
          while ($array = mysqli_fetch_array($busca)) {
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];
          
        ?>
        <tr>
          <td><?php echo $nroproduto?></td>
          <td><?php echo $nomeproduto?></td>
          <td><?php echo $categoria?></td>
          <td><?php echo $quantidade?></td>
          <td><?php echo $fornecedor?></td>
          <td><a class="btn btn-primary" href="_editar_produto.php?id=<?php echo $id_estoque?>" role="button">Editar</a>
          <a class="btn btn-danger" href="_deletar_produto.php?id=<?php echo $id_estoque?>" role="button">Excluir</a></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
  </table>
  </div>
</html>