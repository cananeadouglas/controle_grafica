<html>
<head>
<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
<meta http-equiv="refresh" content=1;url="caixa.php">
<link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>

<?php

include('conecta_banco.php');

$idpedido = $_POST['idpedido'];

mysqli_query($conn, "UPDATE pedidos
        SET entrega = 'sim' 
        WHERE idpedido = '$idpedido' ") or die(mysqli_error());
        echo "<script>alert('Atualizado, click em OK');</script>";


?>

</body>
</html>