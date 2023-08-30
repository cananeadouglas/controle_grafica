<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ESTOQUE</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/navegação_fixa.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<meta http-equiv="refresh" content=30;url="estoque.php">
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<script src="js/default.js"></script>
		
</head>
<body onload="initialize()" >
	<div id="pagewidth">
		<header id="header">
			<div class="center">
				<nav id="mainNav">
					<ul>
						<li class="active">
							<a href="index.php"><span>Pedidos</span></a></li>
						
					</ul>
				</nav>
			</div>
		</header>
		
		<article class="inicio">

<div >

<br/>
<center>
<table border="0" class="tabela">
	<tr>
		<th>Camisas Básicas</th>
		<th>Canecas</th>
		<th>Camisas Baby Look</th>
		<th>Bonés</th>
	</tr>
	<tr>
		<td>
<?php
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 27 and 31 order by idproduto";

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 27 and 31 order by 1") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style border='0' cellspacing='5' class='tabela' align='center' bgcolor='#ffac88' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>
		</td>
		<td>

		<?php
	
$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 36 and 42 order by idproduto";

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 36 and 42 order by 1") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table border='0' cellspacing='5' align='center' class='tabela' bgcolor='#88dcff' ;><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";  
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>
			
		</td>
		<td>
<?php
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 32 and 35 order by idproduto";

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 32 and 35 order by 1") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style cellspacing='3' border='0' class='tabela' align='center' bgcolor='#88ffa1' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>
		</td>

<td>
	
	<?php 
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 50 and 53 order by idproduto";// bonés

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 50 and 53") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style cellspacing='5' border='0' class='tabela' align='center' bgcolor='#419d88' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>

</td>

	</tr>

<tr>
		<th>Almofadas</th>
		<th>Sandálias</th>
		<th>Carimbos</th>
		<th>Body Babys</th>
</tr>

	<tr>
		<td>
			
			<?php
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 43 and 45 order by idproduto"; // almofada

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 43 and 45") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style cellspacing='3' border='0' class='tabela' align='center' bgcolor='#f8ff88' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>

		</td>
		<td>
			<?php
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 46 and 49 order by idproduto";//SANDALIA

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 46 and 49") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style cellspacing='5' border='0' class='tabela' align='center' bgcolor='#96a899' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>
		</td>
		<td>
			
			<?php 
	
	$sql = "SELECT nomeproduto, quantidade FROM produtos where idproduto between 56 and 63 order by idproduto"; // CARIMBO

$resultado = mysqli_query($conn, $sql);

$sql2 = mysqli_query($conn, "SELECT idproduto, nomeproduto, quantidade FROM produtos where idproduto between 56 and 63") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table style cellspacing='5' border='0' class='tabela' align='center' bgcolor='#876fff' ><tr>";
	//echo "<th align='center'>ID</th>";
	echo "<th align='center'>Nome do Produto</th>";
	echo "<th>QTD</th>";
	
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	//echo "<td align='center'>{$linha['idproduto']}</td>";	
	echo "<td align='center'>{$linha['nomeproduto']}</td>";
	echo "<td align='center'>{$linha['quantidade']}</td></tr>";
}
	echo "</table>";

}else{
	echo "<h4><center>nenhum encontrado, digite novamente</center></h4>";
}

?>

		</td>
	</tr>

</table>
</center>


<br/>


<br/>
</div>
<center>
<table border="0" class="tabela" align="center">
<tr>
		<th>REMOVER</th>
		<th>NOVO PRODUTO</th>
		<th>ADICIONAR</th>
	</tr>
	<tr>
		<td>
			
			<div class="purple">

<form action="" method="post" name="form_busca" >
<?php

$sql = "SELECT nomeproduto FROM produtos";

$resultado = mysqli_query($conn, $sql);

echo "<h2>Remover do Estoque</h2>";

echo "<select type='selected' required='required' value='selecione'  name='idproduto' >";

while($linha = mysqli_fetch_array($resultado)){

echo "<option color='White'>{$linha['nomeproduto']}</option>";
}
echo " </select><br/>";

?>
<br/>
<input type="number" name="numero" placeholder="Informe a Quantidade" required="required" />

<input type="submit" name="remove" value="Remover Quantidade" />

</form>
</div>

		</td>
		<td>
			
			<form action="" method="post" name="form_busca" >

			<br/><h2 style="color:black;">Novo Produto</h2><br/>

<input type="text" name="produ" placeholder="Para Adicionar Produto Novo Digite o nome AQUI" required="required" />
<input type="number" name="numero" placeholder="E Informe a Quantidade" required="required" />

<input type="submit" name="adiciona" value="Adicionar Novo Produto" />

</form>

		</td>
		<td>
			
			<div class="verdo">

<form action="" method="post" name="form_busca" >
<?php

$sql = "SELECT nomeproduto FROM produtos";

$resultado = mysqli_query($conn, $sql);

echo "<h2>Adicionar no Estoque</h2>";

echo "<select type='selected' required='required' value='selecione'  name='idproduto' >";

while($linha = mysqli_fetch_array($resultado)){

echo "<option color='White'>{$linha['nomeproduto']}</option>";
}
echo " </select><br/>";

?>
<br/>
<input type="number" name="numero" placeholder="Informe a Quantidade" required="required" />

<input type="submit" name="soma" value="Adicionar Quantidade" />

</form>
</div>

		</td>
	</tr>
</table>
</center>




<br/>

</article>
		
		<footer id="footer">
			</footer>
	
</body>
</html>

<?php

if(isset($_POST['adiciona'])){
	
	include ('adiciona.php');
	echo "<script>history.back();</script>";

}elseif(isset($_POST['remove'])){
	
	include('remove.php');
	echo "<script>history.back();</script>";

}elseif(isset($_POST['soma'])){
	
	include('soma.php');
	echo "<script>history.back();</script>";
		

}else{

}

?>