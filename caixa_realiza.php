<html>
<head>
<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
<meta http-equiv="refresh" content=1;url="index.php">
<link rel="shortcut icon" href="img/favicon.ico">
<head>

<body>

</body>
</html>

<?php

include('conecta_banco.php');

$usuario = $_POST['usuario'];
$nomecliente = $_POST['nomecliente'];
$valorpedido = $_POST['valorpedido'];
$descricao = $_POST['descricao'];
$nomearquivo = $_POST['nomearquivo'];

$sql = "SELECT idusuario
            FROM funcionario
            WHERE usuario = '$usuario'";

$result = mysqli_query($conexao, $sql);
$fetch = mysqli_fetch_assoc($result);
$fetch = array_shift($fetch);

$idusuario = $fetch; // recupero o id do usuario


mysqli_query($conexao,"INSERT INTO pedidos (idusuario, valorpedido, nomecliente, descricao, nomearquivo)
		VALUES ('$idusuario','$valorpedido','$nomecliente','$descricao','$nomearquivo');") or die(mysqli_error());
	echo "<script>alert('Cadastrado Realizado Click em OK e aguarde...');</script>";

	

?>