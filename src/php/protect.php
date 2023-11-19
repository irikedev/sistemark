<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['id'])) {
    die("Seu cargo não o permite acessar esta página!<a href='index.php'>Voltar ao login ></a>");
}
?>