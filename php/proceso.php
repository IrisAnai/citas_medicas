<?php 
include("conexion.php"); //conexion de proceso.php a la base de datos
$nomUsuario = $_POST['usuario'];
$edadUsuario = $_POST['Edad_in'];
$correoUsuario = $_POST['Correo_in'];
$contraUsuario = $_POST['Contrasena_in']; #Variables del index.html

//conexion en base de datos, formulario html y proceso
if ($nomUsuario =="" || $edadUsuario == "" || $correoUsuario == "" || $contraUsuario == "") {
	echo "Faltan llenar campos";
}
else{
	$sql = 'INSERT INTO usuario(nombreUsuario, edadUsuario, correoUsuario, passUsuario) VALUES ("'.$nomUsuario.'","'.$edadUsuario.'","'.$correoUsuario.'","'.$contraUsuario.'")';

	//Ejecutar SQL de insercion a la BD
	$resultado = DataBase::ejecutar_sql($sql);

	echo "Respuesta del servidor:".$resultado;
}
