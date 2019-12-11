<?php 

include('classes.php'); 
session_start();
$value = $_SESSION['cartas'];

$batalha = new Batalha($value[$_POST["carta1"]], $value[$_POST["carta2"]]);
$batalha->vencedor();

?>