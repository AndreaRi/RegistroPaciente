<!DOCTYPE html>
<html>
<head>
	<title>Creacion del Paciente</title>
	<link rel="stylesheet" type="text/css" href="formpaciente.css">
</head>
<body>
			
	<form method="post">
	<section class="userCreation">
		<h4>Registro de Paciente</h4>
		
		<input class="config"  type="text" name="Nombrepaciente" placeholder="Digite el nombre">
		<input class="config" type="text" name="Apellidopaciente" placeholder="Digite los apellidos">
		<input class="config" type="number" name="Cedulapaciente" min="0" max="9999999999" placeholder="Digite la cedula">
		<input class="config" type="number" name="Edadpaciente" min="1" max="190" placeholder="Digite la edad">
		<input class="config" type="text" name="Direccionpaciente" maxlength="80" placeholder="Digite la Direccion">

		<select class="config" name="eps">
 		 <option class="config" value="0">*Elija una eps*</option>
  		<option class="config" value="1">Salud Colmena E.P.S. S.A.</option>
  		<option class="config" value="2">Salud Total S.A. E.P.S.</option>
  		<option class="config" value="3">Cafesalud E.P.S. S.A.</option>
  		<option class="config" value="4">E.P.S.  Sanitas S.A.</option>
  		<option class="config" value="5">E.P.S. Unimec - Liquidación</option>
  		<option class="config" value="6">Compensar  E.P.S.</option>
  		<option class="config" value="7">EPS Prog. Comfenalco Antioquia</option>
  		<option class="config" value="8">SuSalud EPS - (Suramericana)</option>
  		<option class="config" value="9">Colseguros E.P.S.</option>
		</select>

		<select class="config" name="sede">
  		<option class="config" value="0">*Elija una sede*</option>
  		<option class="config" value="1">Bogota</option>
  		<option class="config" value="2">Cali</option>
  		<option class="config" value="3">Medellin</option>
		</select>

		<label for="">Seleccione el genero</label>
		<input class="genero" type="radio" name="Generopaciente" value="F"> Femenino
		<input class="genero" type="radio" name="Generopaciente" value="M"> Masculino
		<br>
		<label for="">Seleccione el estado</label>
		<input class="estado" type="radio"  name="Estadopaciente" value="Activo"> Activo
		<input class="estado" type="radio" name="Estadopaciente" value="Inactivo"> Inactivo

		<p> De acuerdo con <a href="creacionpaciente.php">Terminos y Condiciones Odontocenter </a></p>
		<input class="btn" type="submit" name = "Registrar" value="Registrar">
	</section>
	</form>
	<?php include("registrarpaciente.php")?>
</body>
</html>