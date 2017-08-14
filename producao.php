<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>PRODUÇÃO</title>
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
		
<div class="verde">

<form method="post" action="manda3.php" />

<?php
echo "<center>Liberado por pagamento</center>";
$sql = "SELECT p.idpedido, f.usuario, p.descricao, p.nomearquivo
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = 'sim' and concluido = '' ORDER BY 1 ";

$resultado = mysqli_query($conexao, $sql);

$sql2 = mysqli_query($conexao, "SELECT idpedido, f.usuario, descricao, nomearquivo
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = 'sim' and concluido = '' ORDER BY 1 ") or die(mysqli_error());
$row = mysqli_num_rows($sql2);


if($row > 0){

	echo "<table style border='1' align='center'><tr>";
	echo "<th align='center'>IDPEDIDO</th>";
	echo "<th>USUÁRIO</th>";
	echo "<th>Descrição</th>";
	echo "<th>Nome do Arquivo</th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	echo "<td align='center'>{$linha['idpedido']}</td>";
	echo "<td align='center'>{$linha['usuario']}</td>";
	echo "<td align='center'>{$linha['descricao']}</td>";
	echo "<td align='center'>{$linha['nomearquivo']}</td></tr>";

}

	echo "</table><br/>";
	
}else{
	echo "<h4><center>Não tem nenhum iten para Produção que veio de pagamentos <br/><br/>Selecione ID para Conclusão do Item</center></h4>";
}


$sql5 = "SELECT idpedido
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = 'sim' and concluido = '' ORDER BY 1";// usuario

$resultado5 = mysqli_query($conexao, $sql5);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='idpedido'>";

while($linha5 = mysqli_fetch_array($resultado5)){

echo "<option>{$linha5['idpedido']}</option>";

}

echo " </select></p>"; // fim consulta



?>

<input type="submit" value="Marcar Item como Concluído" />

</form><br/>


<form method="post" action="manda3.php" />

<?php

// novo
echo "<center>Liberado sem pagamento</center>";
$sql3 = "SELECT p.idpedido, f.usuario, p.descricao, p.nomearquivo
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'sim' and concluido = '' ORDER BY 1 ";

$resultado2 = mysqli_query($conexao, $sql3);

$sql2 = mysqli_query($conexao, "SELECT idpedido, f.usuario, descricao, nomearquivo
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'sim' and concluido = '' ORDER BY 1 ") or die(mysqli_error());
$row = mysqli_num_rows($sql2);


if($row > 0){

	echo "<table style border='1' align='center'><tr>";
	echo "<th align='center'>IDPEDIDO</th>";
	echo "<th>USUÁRIO</th>";
	echo "<th>Descrição</th>";
	echo "<th>Nome do Arquivo</th>";
	echo "</tr><tr>";

	while($linha2 = mysqli_fetch_array($resultado2)){

	echo "<td align='center'>{$linha2['idpedido']}</td>";
	echo "<td align='center'>{$linha2['usuario']}</td>";
	echo "<td align='center'>{$linha2['descricao']}</td>";
	echo "<td align='center'>{$linha2['nomearquivo']}</td></tr>";

}

	echo "</table><br/>";
	
}else{
	echo "<h4><center>Não tem nenhum iten para Produção<br/><br/>Selecione ID para Conclusão do Item</center></h4>";
}

$sql5 = "SELECT p.idpedido, f.usuario, p.descricao, p.nomearquivo
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'sim' and concluido = '' ORDER BY 1";// usuario

$resultado5 = mysqli_query($conexao, $sql5);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='idpedido'>";

while($linha5 = mysqli_fetch_array($resultado5)){

echo "<option>{$linha5['idpedido']}</option>";

}

echo " </select></p>"; // fim consulta



// novo

?>

<input type="submit" value="Marcar Item como Conluído" />

</form>


</div>		
		
		
		</article>
		
		<footer id="footer">
			</footer>
	</div>
</body>
</html>