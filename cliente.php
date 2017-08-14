<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consultar Cliente</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/navegação_fixa.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="js/default.js"></script>
		
</head>
<body onload="initialize()">
	<div id="pagewidth">
		<header id="header">
			<div class="center">
				<nav id="mainNav">
					<ul>
						<li class="active">
							<a href="index.php"><span>Pedidos</span></a></li>
						<li><a href="caixa.php"><span>Caixa</span></a></li>
						<li><a href="producao.php"><span>Produção</span></a></li>
						<li><a href="cliente.php"><span>Consulta Cliente</span></a></li>
						<li><a href="estoque.php"><span>Estoque</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<article class="inicio">
<div class="azul">

<br/>

<form action="" method="post" name="form_busca" >

<input type="text" name="busca" placeholder="Nome do Cliente" required="required" /><br/><br/>
<input type="submit" name="botao" value="Pesquisar" />

</form>
<br/>

<?php

if(isset($_POST['botao'])){
	
	$busca = $_POST['busca'];
	
	$sql = "SELECT f.nome, p.nomecliente, p.datapedido, p.descricao, p.valorpedido 
FROM pedidos p, funcionario f WHERE f.idusuario = p.idusuario and p.nomecliente like '%$busca%' or f.nome like '%$busca%'
ORDER by p.datapedido DESC";

$resultado = mysqli_query($conexao, $sql);

$sql2 = mysqli_query($conexao, "SELECT f.nome, p.nomecliente, p.datapedido, p.descricao, p.valorpedido 
FROM pedidos p, funcionario f WHERE f.idusuario = p.idusuario and p.nomecliente like '%$busca%' or f.nome like '%$busca%'
ORDER by p.datapedido DESC") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style border='1' align='center'><tr>";
	echo "<th align='center'>NOME</th>";
	echo "<th>CLIENTE</th>";
	echo "<th>DATA do PEDIDO</th>";
	echo "<th>DESCRIÇÃO</th>";
	echo "<th>VALOR DO PEDIDO</th>";
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	echo "<td align='center'>{$linha['nome']}</td>";
	echo "<td align='center'>{$linha['nomecliente']}</td>";
	echo "<td align='center'>{$linha['datapedido']}</td>";
	echo "<td align='center'>{$linha['descricao']}</td>";
	echo "<td align='center'>{$linha['valorpedido']}</td></tr>";
}
	echo "</table><br/>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}
}



?>
<br/>



<br/>
	
		</article>
		
		<footer id="footer">
			</footer>
	</div>
</body>
</html>