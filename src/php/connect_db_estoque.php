<?php
$hostename = "localhost";
$db = "sistema_estoque";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostename,$usuario,$senha,$db);
if($conexao->error) {
    die("Falha ao conectar ao banco de dados! Tente novamente ou consulte o suporte.");
};
?>