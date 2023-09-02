<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>PEDIDOS</title>
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
		
		<form action="caixa_realiza.php" method="POST">

		
		
<?php

$sql = "SELECT usuario FROM funcionario;";

$resultado = mysqli_query($conn, $sql);

echo "<p><label>Login do Funcionario:</label><br>";

echo "<select type='selected' required='required' value='selecione'  name='usuario' >";

while($linha = mysqli_fetch_array($resultado)){

echo "<option color='White'>{$linha['usuario']}</option>";
}
echo " </select></p>";

?>


<div class="preto"><br/><br/>
		<input type="text" name="nomecliente" placeholder="Nome do Cliente" required="required" autofocus />
		<input type="double" name="valorpedido" placeholder="Valor Total no lugar da virgula(,) use o ponto(.)." required="required" />
		<input type="text" name="descricao" placeholder="Descrição do Produto" required="required" />
		<input type="text" name="nomearquivo" placeholder="Nome do Arquivo Exato" required="required" />
		
		<input type="submit" value="Enviar" />
		<br/><br/>
		</form>
		
		</div>
		</article>
		
		<footer id="footer">
		
			</footer>
	</div>
</body>
</html>