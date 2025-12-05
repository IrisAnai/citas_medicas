<?php

include("../php/conexion.php");
$sql = "SELECT * FROM registro";
$respuesta = Database::get_rows($sql);
?>

<h1>Lista de pacientes</h1><br><br>

<a href="menu.php"><button>Regresar</button></a><br><br>
<a href="registro.php"><button>Registrar nuevo paciente</button></a><br><br>
<table border="1">
  <tr>
    <th>Nombre paciente</th>
    <th>Nombre medico</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Especialidad medico</th>
  </tr>
  <?php while($fila = mysqli_fetch_assoc($respuesta)){?>
    <tr>
      <td><?php echo $fila["Nombre_Paciente"];?></td>
      <td><?php echo $fila["Nombre_Medico"];?></td>
      <td><?php echo $fila["Fecha"];?></td>
      <td><?php echo $fila["Hora"];?></td>
      <td><?php echo $fila["Especialidad_Medico"];?></td>
      <td>
        <a href="../php/editarPaciente.php?id=<?php echo $fila["ID_Cita"]?>"><button>Editar</button></a>
        <a href="../php/eliminarPaciente.php?id=<?php echo $fila["ID_Cita"]?>"><button>Eliminar</button></a>
      </td>
    </tr>
  <?php } ?>
</table>