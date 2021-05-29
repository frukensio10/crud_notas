<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ingreso de registros</title>

<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/estilos2.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style_nav.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet"/>

</head>

<body>
<div class="container">
	<?php 
include 'navbar.php';
	 ?>
</div>
<div class="container">
<img src="img/banner1.png" alt="">
</div>

<div class="container">
<center>		
<h3>Ingresar alumnos:</h3>
		<form method="POST" action="insertar.php">
			<table class="table table-bordered">
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txtPaterno"></td>
				</tr>
				<tr>
					<td>Apellido materno: </td>
					<td><input type="text" name="txtMaterno"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Nota parcial: </td>
					<td><input type="text" name="txtParcial"></td>
				</tr>
				<tr>
					<td>Nota final: </td>
					<td><input type="text" name="txtFinal"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name="" class="btn__update"></td>
					<td><input type="submit" value="INGRESAR ALUMNO" class="btn__update"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
	</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>