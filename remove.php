<?php
include ('conecta_banco.php');


$idproduto = $_POST['idproduto'];
	$numero = $_POST['numero'];

	mysqli_query($conexao, "UPDATE produtos 
        SET quantidade = quantidade-'$numero'
        WHERE idproduto = '$idproduto' ") or die(mysqli_error());
	$idproduto = 'a';
	$numero = '0';
        echo "<script>alert('item(ns) removido(s), click em OK'); history.back();</script>";

?>