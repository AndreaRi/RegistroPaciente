<html>
<head>
<title>Registros de pacientes</title>
<link rel="stylesheet" type="text/css" href="mostrarpaciente.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"
</head>
<body>
<?php
$inc = include("con_db.php");
	if($inc) {
	$consulta = "SELECT Nombrepaciente,Apellidopaciente,Cedulapaciente,Estadopaciente,Edadpaciente,Generopaciente,Direccionpaciente,Nombresede,Nombreeps
		FROM construccionsoftware.paciente, construccionsoftware.sede, construccionsoftware.eps 
		WHERE PACIENTE.Sede_IdSede = SEDE.IdSede
		AND  PACIENTE.Eps_IdEps = EPS.IdEps";
	$resultado = mysqli_query($conex,$consulta);
?><br><br><br>
<table class="table">
  <thead class="thead-light">
<h1 align=center>Información de Pacientes</h1>
<tr><th scope="col">Nombres</th><th scope="col">Apellidos</th><th scope="col">Cedula</th><th scope="col">Estado</th><th scope="col">Edad</th><th scope="col">Genero</th><th scope="col">Direccion</th><th scope="col">Sede</th><th scope="col">Eps</th></tr>
<?php
	if($resultado) {
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
		<tr><th scope = "row">
			<?php echo $nombre; ?> 
			</th><th scope = "row">
			<?php echo $apellido; ?>		
                		</th><th scope = "row">
			 <?php echo $cedula; ?>
			</th><th scope = "row">
			<?php echo $estado; ?>
			</th><th scope = "row">
			<?php echo $edad; ?>
			</th><th scope = "row">
			<?php echo $genero; ?>
			</th><th scope = "row">
			<?php echo $direccion; ?>
			</th><th scope = "row">
			<?php echo $sede; ?>
			</th><th scope = "row">
			<?php echo $eps; ?>
			</th></tr>	
		<?php
		}
	}
}
?>
</body>
</html>