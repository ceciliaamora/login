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
				<h3 class="text-monospace text-muted">Criar conta</h3>
				<label for="login">Login:</label>
				<input type="text" name="login" id="login" class="m-3"><br>

				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" class="m-3"><br>
				<button class="btn btn-primary m-3">Cadastrar</button>
			</form>

		</div>
	</body>
</html>
