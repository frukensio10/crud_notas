<?php 
include 'model/conexion.php';
$sentencia=$bd->query("select * from alumno;");
$alumnos=$sentencia->fetchAll(PDO::FETCH_OBJ);
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>CRUD Registro de alumnos</title>
	<meta charset="utf-8">
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/estilos2.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/miestilo.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet">
</head>

<body>



<div class="container">

<br>
<!-- Inicio NavBar -->
	<nav>
	<ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Quiénes somos</a></li>
        <li><a href="#">Servicios</a>
            <ul><li><a href="">Servicio 1</a></li>
            <li><a href="">Servicio 2</a></li>
            <li><a href="">Servicio 3</a></li>
            <li><a href=""></a>Servicio 4</li></ul>
            </li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
</nav>
<!-- Final NavBar -->

<header>
	<img src="img/banner2.png" alt="">
</header>



<h2>Registro de Alumnos</h2>
<hr>
<table class="table table-bordered">
  
  <thead>

    <tr>
      <th>Codigo</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Nombre</th>
      <th>Nota Parcial</th>
      <th>Nota Final</th>
      <th>Premedio</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>

  </thead>
<tbody>
	
			<?php 
				foreach ($alumnos as $dato) {
			?>
					<tr>
						<td><?php echo $dato->id_alumno; ?></td>
						<td><?php echo $dato->ap_paterno; ?></td>
						<td><?php echo $dato->ap_materno; ?></td>
						<td><?php echo $dato->nombre; ?></td>
						<td><?php echo $dato->ex_parcial; ?></td>
						<td><?php echo $dato->ex_final; ?></td>
						<td><?php echo ($dato->ex_final + $dato->ex_parcial)/2; ?></td>
						<td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>" class="btn__update">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>" class="btn__delete">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
</tbody>		
		</table>
	
<!--inicio footer -->

<?php 
include 'footer.php';
 ?>

<!-- fin footer -- >
</div>

 
</body>
</html>