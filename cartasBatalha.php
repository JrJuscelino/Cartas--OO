<?php 
include('classes.php');
session_start();
foreach ($_SESSION['cartas'] as $i=>$value):
     echo "<option value=",$i,">",$value->nome,"</option>";
endforeach;

?>