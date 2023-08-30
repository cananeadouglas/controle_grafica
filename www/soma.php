<?php

include ('conecta_banco.php');

	$idproduto = $_POST['idproduto'];
	$numero = $_POST['numero'];

	mysqli_query($conn, "UPDATE produtos 
        SET quantidade = quantidade+'$numero'
        WHERE idproduto = '$idproduto' ") or die(mysqli_error());

	$idproduto = 'a';
	$numero = '0';

        echo "<script>alert('item(ns) somado(s), click em OK');</script>";

?>