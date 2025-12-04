<?php

include ("conexion.php");
$idPaciente = $_GET["ID_Cita"];
$sql = "SELECT * FROM registro WHERE $idPaciente = ID_Cita";
$respuesta = Database::get_rows($sql);
$paciente = mysqli_fetch_assoc($respuesta);
?>

<h2>Registro Mascota</h2>
<form action="editarPaciente.php" method="post">
  <label>Nombre Paciente</label>
  <input type="text" name="nomPac" id="nomPac" value="<?php echo $paciente["Nombre_Paciente"]?>">
  <input type="text" name="nomMed" id="nomMed" value="<?php echo $paciente["Nombre_Medico"]?>">
  <input type="date" name="Fecha" id="Fecha" value="<?php echo $paciente["Fecha"]?>">
  <input type="time" name="Hora" id="Hora" value="<?php echo $paciente["Hora"]?>">
  <input type="text" name="EspecialMed" id="EspecialMed" value="<?php echo $paciente["Especialidad_Medico"]?>">
  <br><br>
  <button> <a href="guardarDatosPaciente.php">Guardar</a></button>
</form>

