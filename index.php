<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<p>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</p>
	<form action="script.php" method="post">
		<?php
		//	$mensagemErro = isset($_SESSION['mensagem-de-erro']) ? 
		//$_SESSION['mensagem-de-erro']; 
		//	if(!empty($mensagemErro))
		//	{
		//		echo $mensagemErro;
		//	}
		//?>
		<p>Seu Nome - Your Name: <input type="text" name="nome"></p>
		<p>Sua Idade - Your Age: <input type="text" name="idade"></p>
		<p><input type="submit" value="Enviar dados do Competidor"></p>
	</form>
</body>
</html>	
