<?php
include('connect_db_estoque.php');
$email = $_POST['emailLogin'];
$senha = $_POST['senhaLogin'];

if(isset($_POST['emailLogin']) || isset($_POST['senhaLogin'])) {
    if(strlen($_POST['emailLogin']) == 0) {
        echo "Preencha seu e-mail.";
    } else if(strlen($_POST['senhaLogin']) == 0) {
        echo "Preencha sua senha.";
    } else {

        $email =  $conexao->real_escape_string($_POST['emailLogin']);
        $senha =  $conexao->real_escape_string($_POST['senhaLogin']);

        $sql= "SELECT * FROM estoque_login WHERE email = '$email' AND senha = '$senha' ";
        $sqli_query = mysqli_query($conexao,$sql);

        $quantidade = $sqli_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sqli_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            header("location: ../../Home.php");
        } else{
            echo "<span>As informações de login estão incorretas. <a href='#'>Abra Chamado</a> ou  <a href='../../index.php'>Tente Novamente</a></span>";
        }
    }
}
?>