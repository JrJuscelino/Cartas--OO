<?php
include('classes.php');
session_start();
$carta = new Local($_POST["id"], $_POST["nome"],$_POST["level"], 
$_POST["cor"], $_POST["imagem"], $_POST["area"], $_POST["populacao"], $_POST["status"]);
array_push($_SESSION['cartas'],$carta);
$carta->toString();
?>