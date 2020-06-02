<?php
include("con_db.php");
if (isset($_POST['Registrar'])) {
//se dio click en el boton?

	if (strlen($_POST['Nombrepaciente']) >= 1 && strlen($_POST['Apellidopaciente']) >= 1 && strlen($_POST['Cedulapaciente']) >= 1 && strlen($_POST['Edadpaciente']) >= 1 && strlen($_POST['Direccionpaciente']) >= 1) {
	//esta vacio alguno de los campos a escribir?
	//trim recorta los espacios en blanco al inicio y final de lo ecrito
	$nombre = trim($_POST['Nombrepaciente']);
	$apellido = trim($_POST['Apellidopaciente']);
	$cedula = trim($_POST['Cedulapaciente']);
	$edad = trim($_POST['Edadpaciente']);
	$direccion = trim($_POST['Direccionpaciente']);
	$eps = ($_POST['eps']);
	$sede = ($_POST['sede']);
	$genero = ($_POST['Generopaciente']);
	$estado = ($_POST['Estadopaciente']);
	$consulta = "INSERT INTO `paciente`(`Estadopaciente`,`Nombrepaciente`,`Apellidopaciente`,
`Cedulapaciente`,`Edadpaciente`,`Generopaciente`,`Direccionpaciente`,`Sede_IdSede`,`Eps_IdEps`) VALUES('$estado',
'$nombre','$apellido','$cedula','$edad','$genero','$direccion','$sede','$eps')";
	//la consulta se puede extraer de la base de datos en phpmyadmin o workbench
	$resultado = mysqli_query($conex, $consulta);
		if ($resultado) { //Se valida la conexion
		?><h3 class="ok">¡Se ha guardado el usuario correctamente!</h3><?php
		} else {
		?><h3 class="bad">¡Ocurrió un error!</h3><?php
		}
	} else {
	?><h3 class="bad">¡Por favor complete todos los campos!</h3><?php
	}
}
?>
















