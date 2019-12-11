<?php
include('classes.php'); 
session_start();
$carta = new Personagem($_POST["id"], $_POST["nome"],$_POST["level"], 
$_POST["cor"], $_POST["imagem"], $_POST["idade"], $_POST["raca"], $_POST["luta"],
$_POST["magia"], $_POST["sobrehumano"], $armas[$_POST["arma"]]);
array_push($_SESSION['cartas'],$carta);
$carta->toString();
?>            