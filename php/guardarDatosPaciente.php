<?php

include("conexion.php");
$idPaciente = $_POST["id"];
$nomPaciente = $_POST["nomPac"];
$nomMed = $_POST["nomMed"];
$fecha = $_POST["Fecha"];
$hora = $_POST["Hora"];
$especMed = $_POST["EspecialMed"];

$sql="UPDATE registro SET Nombre_Paciente='$nomPaciente', Nombre_Medico='$nomMed', Fecha='$fecha', Hora='$hora', Especialidad_Medico='$especMed' WHERE ID_Cita = '$idPaciente'";
$respuesta = Database::ejecutar_sql($sql);