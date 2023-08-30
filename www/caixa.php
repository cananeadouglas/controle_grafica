<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CAIXA</title>
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
<div class="vemelha">

<form method="post" action="manda.php" />

<?php

$sql = "SELECT idpedido, f.usuario, valorpedido, nomecliente, descricao
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = null and liberadoproducao = null  ORDER BY 1";

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idpedido, f.usuario, valorpedido, nomecliente, descricao
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = null and liberadoproducao = null  ORDER BY 1 ") or die(mysqli_error());
$row = mysqli_num_rows($sql2);


if($row > 0){

	echo "<table style border='1' align='center'><tr>";
	echo "<th align='center'>IDPEDIDO</th>";
	echo "<th>USUÁRIO</th>";
	echo "<th>VALOR</th>";
	echo "<th>CLIENTE</th>";
	echo "<th>PEDIDO</th>";
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	echo "<td align='center'>{$linha['idpedido']}</td>";
	echo "<td align='center'>{$linha['usuario']}</td>";
	echo "<td align='center'>{$linha['valorpedido']}</td>";
	echo "<td align='center'>{$linha['nomecliente']}</td>";
	echo "<td align='center'>{$linha['descricao']}</td></tr>";

}

	echo "</table><br/>";
	
}else{
	echo "<h4><center>Sem Pedidos no momento<br/><br/>Selecione ID para PAGAMENTO</center></h4>";
}

$sql5 = "SELECT idpedido
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = null and liberadoproducao = null  ORDER BY 1 ";// usuario

$resultado5 = mysqli_query($conn, $sql5);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='idpedido'>";

while($linha5 = mysqli_fetch_array($resultado5)){

echo "<option>{$linha5['idpedido']}</option>";

}

echo " </select></p>"; // fim consulta

?>

<input type="submit" value="Fez Pagamento" />

</form><br/>

<form name="form2" method="post" action="manda2.php">

<?php

echo "<h4><center>Selecione ID para Liberar para produção</center></h4>";
$sql6 = "SELECT idpedido, f.usuario, valorpedido, nomecliente, descricao
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE pagamento = '' and liberadoproducao = ''  ORDER BY 1 ";// usuario

$resultado6 = mysqli_query($conn, $sql6);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='idpedido'>";

while($linha6 = mysqli_fetch_array($resultado6)){

echo "<option>{$linha6['idpedido']}</option>";

}

echo " </select></p>"; // fim consulta

?>

<input type="submit" value="Liberar para Produção sem Pagamento" />

</form>

</div>



<div class="amarelo" >

<form method="post" action="manda.php" />

<?php

$sql1 = "SELECT idpedido, f.usuario, valorpedido, nomecliente, descricao
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'Sim' and pagamento = '' ORDER BY 1";

$resultado1 = mysqli_query($conn, $sql1);

$sql2 = mysqli_query($conn, "SELECT idpedido, f.usuario, valorpedido, nomecliente, descricao
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'Sim' and pagamento = '' ORDER BY 1") or die(mysqli_error());
$row = mysqli_num_rows($sql2);


if($row > 0){

	echo "<table style border='1' align='center'><tr>";
	echo "<th align='center'>IDPEDIDO</th>";
	echo "<th>USUÁRIO</th>";
	echo "<th>VALOR</th>";
	echo "<th>CLIENTE</th>";
	echo "<th>PEDIDO</th>";
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha1 = mysqli_fetch_array($resultado1)){

	echo "<td align='center'>{$linha1['idpedido']}</td>";
	echo "<td align='center'>{$linha1['usuario']}</td>";
	echo "<td align='center'>{$linha1['valorpedido']}</td>";
	echo "<td align='center'>{$linha1['nomecliente']}</td>";
	echo "<td align='center'>{$linha1['descricao']}</td></tr>";

}

	echo "</table><br/>";
	
}else{
	echo "<h4><center>Sem Itens Liberados para produção<br/><br/>Selecione ID para PAGAMENTO</center></h4>";
}

$sql0 = "SELECT idpedido
		FROM pedidos p JOIN funcionario f USING (idusuario) WHERE liberadoproducao = 'Sim' and pagamento = '' ORDER BY 1";// usuario

$resultado0 = mysqli_query($conn, $sql0);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='idpedido'>";

while($linha0 = mysqli_fetch_array($resultado0)){

echo "<option>{$linha0['idpedido']}</option>";

}

echo " </select></p>"; // fim consulta

?>
<input type="submit" value="Já Fez Pagamento" />

</form>

</div><br/><br/>
		
		</article>
		
		<footer id="footer">
			</footer>
	</div>
</body>
</html>