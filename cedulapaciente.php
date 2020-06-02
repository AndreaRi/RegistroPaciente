<html>
<head>
	<title>Consultar Paciente</title>
	<link rel="stylesheet" type="text/css" href="mostrarcedula.css">
</head>
<body>
<form method="post">
	<section class="userCreation">
		<h4>Buscar Paciente</h4>
		
		<input class="config" type="number" name="Cedulapaciente" min="0" max="9999999999" placeholder="Digite su cedula">
		<input class="btn" type="submit" name = "Mostrar" value="Mostrar">
	</section>
<?php
 error_reporting(5);
if (isset($_POST['Mostrar'])) {
	if (strlen($_POST['Cedulapaciente']) >= 1) {
	$cedula = trim($_POST['Cedulapaciente']);
	} else {
	?><h3 class="bad">¡Por favor digite la cedula del paciente a buscar!</h3><?php
	}
	$inc = include("con_db.php");
	if($inc) {
	$consulta= "SELECT Nombrepaciente,Apellidopaciente,Cedulapaciente,Estadopaciente,Edadpaciente,Generopaciente,Direccionpaciente,Nombresede,Nombreeps
		FROM construccionsoftware.paciente, construccionsoftware.sede, construccionsoftware.eps 
		WHERE PACIENTE.Sede_IdSede = SEDE.IdSede
		AND  PACIENTE.Eps_IdEps = EPS.IdEps
		AND PACIENTE.Cedulapaciente = '$cedula'";
		$resultado = mysqli_query($conex,$consulta);
	if($consulta == NULL) {
		?><h3 class="bad">¡No se encontraron registros con este No. de cedula!</h3><?php
		} else {
			?><br><br><br>
			<table border= "2" style="margin: 0 auto;">
			<h1 align=center>Información del Paciente: </h1>
			<tr><td>Nombres</td><td>Apellidos</td><td>Cedula</td><td>Estado</td><td>Edad</td><td>Genero</td>
			<td>Direccion</td><td>Sede</td><td>Eps</td></tr>
			<?php
			while($row = $resultado->fetch_array()) {
		$nombre = $row['Nombrepaciente'];
		$apellido = $row['Apellidopaciente'];
		$cedula = $row['Cedulapaciente'];
		$estado = $row['Estadopaciente'];
		$edad = $row['Edadpaciente'];
		$genero = $row['Generopaciente'];
		$direccion = $row['Direccionpaciente'];
		$sede = $row['Nombresede'];
		$eps = $row['Nombreeps'];
		?>
		<tr><td>
			<?php echo $nombre; ?> 
			</td><td>
			<?php echo $apellido; ?>		
                		</td><td>
			 <?php echo $cedula; ?>
			</td><td>
			<?php echo $estado; ?>
			</td><td>
			<?php echo $edad; ?>
			</td><td>
			<?php echo $genero; ?>
			</td><td>
			<?php echo $direccion; ?>
			</td><td>
			<?php echo $sede; ?>
			</td><td>
			<?php echo $eps; ?>
			</td></tr>	
			<?php
			}
		}
	
	}
}?>
</body>
</html>