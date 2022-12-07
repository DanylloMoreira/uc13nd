<?php 
include '../conn/connect.php';
$excluido = $conn->query("delete from tbprodutos where id_produtos=".$_GET['id_produto']);
header("location: produtos_lista.php");

?>