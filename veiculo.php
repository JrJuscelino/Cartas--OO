<?php
include('classes.php');
session_start();
$carta = new Veiculo($_POST["id"], $_POST["nome"],$_POST["level"], 
$_POST["cor"], $_POST["imagem"], $_POST["velocidade"], $_POST["voa"], $_POST["capacidade"]);
array_push($_SESSION['cartas'],$carta);
$carta->toString();
?>