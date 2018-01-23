
<!DOCTYPE html>

<html>
    <head>

		<meta charset="UTF-8">

		<title>Sistema de Controle de Luminescência - Login</title>

		<link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.min.css">

		<link rel="stylesheet" href="../../includes/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="../../includes/css/style.css">

	</head>

<div class="area-login">
			
			

			<div class="texto chamada-home txt-ao-centro oxygen-regular">
				
				<p>Digite seu usuário e senha abaixo:</p>

			</div>

			<div class="login">
										
				<form class="form center-block" action="acao_login.php" method="POST">
					<div class="form-group">
						<input type="text" name="usu_usuario" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="Usuário" required>
					</div>
					<div class="form-group">
						<input type="password" name="usu_senha" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="Senha" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-acessar fonte-bold transition mukta-bold transition hover">Acessar</button>
						<div class="clearfix"></div>
					</div>
				</form>

			</div>

		</div>

</html>