<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];

?>



<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/estilo.css">
	</head>
	<body>
		<div class="wrapper mt-5">

			<form class="login bg-light text-center" action="login.php" method="POST">
				<?php 
					echo 
					"
						Olá, seja bem-vindo, $login!
					"
				?>	


			</form>

		</div>
	</body>
</html>