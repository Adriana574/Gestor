<?php 
session_start();

if(isset($_SESSION['usuario']))
{
	include "header.php";
	?>
	<div class="container" style="text-align: center">
		<div class="row">
			<div class="jumbotron">
					<h1 class="display-4" style="font-family: Lucida Bright">Bienvenido a Pingüigestor</h1>
					<p class="lead" style="font-family: Didot">En donde podrás agregar carpetas, agregar categorías, descargarlos y visualizarlos</p>
					<hr class="my-4">
					<img src="../img/logo.png" width="20%">
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="categorias.php" role="button">Continuar</a>
					</p>
				</div>
		</div>
	</div>
	<?php
	include "footer.php";
}
else
{
	header("location:../index.php");
}

?>