<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">

</head>
<body background="img/fondo1.jpg">
	<div class="container login-container">
		<div class="row">
			<div class="col-md-6 ads">
				<h1><span id="fl" style="font-family: Baskerville"><b>Gestor de archivos</b></span></h1>
			</div>
			<div class="col-md-6 login-form">
				<div class="profile-img">
					<img src="img/logo.png" height="140px" width="140px;">
				</div>
				<h3>Login</h3>

				<form method="post" id="frmLogin" onsubmit="return logear()">
					<div class="form-group">
						<input type="text" id="login" class="form-control" name="login" placeholder="username" required="">
					</div>
					<div class="form-group">
						<input type="password" id="password" class="form-control" name="password" placeholder="password" required="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
					</div>
					<div class="form-group forget-password">
						<a href="registro.php">Registrar</a>
					</div>
				</form>

			</div>
		</div>
	</div>
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script type="text/javascript">
		function logear()
		{
			$.ajax({
				type: "POST",
				data: $('#frmLogin').serialize(),
				url: "procesos/usuario/login/login.php",
				success:function(respuesta)
				{
					
					respuesta = respuesta.trim();
					if (respuesta == 1) 
					{
						window.location = "vistas/inicio.php";
					}
					else
					{
						swal(":(", "Fallo al entrar", "error");
					}
				}
			});
			return false;
		}
	</script>
</body>
</html>