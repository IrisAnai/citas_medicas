<?php

include ("conexion.php");
$idPaciente = $_GET['ID_Cita'];
$sql = "SELECT * FROM registro WHERE ID_Cita = '$idPaciente'";
$respuesta = Database::get_rows($sql);
$paciente = mysqli_fetch_assoc($respuesta);
?>

<h2>Edicion Paciente</h2>
<form action="../php/editarPaciente.php" method="post">
  <label>Nombre paciente</label>
  <input type="text" name="nomPac" id="nomPac" value="<?php echo $paciente["Nombre_Paciente"]?>"><br><br>
  <label>Nombre medico</label>
  <input type="text" name="nomMed" id="nomMed" value="<?php echo $paciente["Nombre_Medico"]?>"><br><br>
  <label>Fecha</label>
  <input type="date" name="Fecha" id="Fecha" value="<?php echo $paciente["Fecha"]?>"><br><br>
  <label>Hora</label>
  <input type="time" name="Hora" id="Hora" value="<?php echo $paciente["Hora"]?>"><br><br>
  <label>Especialidad medico</label>
  <input type="text" name="EspecialMed" id="EspecialMed" value="<?php echo $paciente["Especialidad_Medico"]?>">
  <br><br>
  <a href="guardarDatosPaciente.php"><button>Guardar</button></a> 
</form>
<a href="../templates/editar.php"><button>Cancelar</button></a>



