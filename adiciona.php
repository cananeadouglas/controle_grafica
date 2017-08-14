<?php
include ('conecta_banco.php');

	$produ = $_POST['produ'];
	$numero = $_POST['numero'];

	mysqli_query($conexao, "INSERT INTO produtos(nomeproduto, quantidade) VALUES ('$produ','$numero')") or die(mysqli_error());
        echo "<script>alert('Adicionado, click em OK'); </script>";

?>