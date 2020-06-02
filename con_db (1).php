<?php
//parametros de conexion:
//1. servidor(localhost)
//2. Nombre de usuario (administrador root)
//3. Contraseña (esta en blanco)
//4. base de datos que queremos seleccionar(construccionsoftware)
//error_reporting(5);

$conex=mysqli_connect("localhost","root","","construccionsoftware");

/*if(!$conex){
	echo 'Error al conectar la base de datos';
}
else{
	echo 'Conectado a la base de datos';
}*/
?>