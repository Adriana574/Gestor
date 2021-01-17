<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	$idUsuario = $_SESSION['idUsuario'];
	$conexion = new Conectar();
	$conexion = $conexion->conexion();
 ?>


<div class="table table-responsive table-hover">
	<table class="table table-hover" id="tablaCategoriasDataTable">
		<thead style="text-align: center; background-color: #0293A4; color: white">
			<th style="font-family: Lucida Bright">NOMBRE</th>
			<th style="font-family: Lucida Bright">FECHA</th>
			<th style="font-family: Lucida Bright">EDITAR</th>
			<th style="font-family: Lucida Bright">ELIMINAR</th>
		</thead>
		<tbody>

		<?php
		 	$sql = "SELECT id_categoria,
		 					nombre,
		 					fechaInsert
		 			FROM t_categorias
		 			WHERE id_usuarios = $idUsuario";

		    $result = mysqli_query($conexion, $sql);

		    while ($mostrar = mysqli_fetch_array($result)) 
		    {
		    	$idCategoria = $mostrar['id_categoria'];
		?>

			<tr class="table-info" style="text-align: center;">
				<td><?php echo $mostrar['nombre']; ?></td>
				<td><?php echo $mostrar['fechaInsert']; ?></td>
				<td>
					<span  class="btn btn-warning btn-sm" onclick="obtenerDatosCategoria('<?php  echo $idCategoria?>')" data-toggle="modal" data-target="#modalActualizarCategoria">
						<span class="fas fa-edit text-align center"></span>
					</span>
				</td>
				<td>
					<span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php  echo $idCategoria?>')">
						<span class="fas fa-trash-alt"></span>
					</span>
				</td>
			</tr>
		<?php 
	   	  }
		?>
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$(document).ready(function()
	{
		$('#tablaCategoriasDataTable').DataTable();
	});
</script>