<?php 
include("conexion.php"); //conexion de proceso.php a la base de datos
$email = $_POST['email'];
$contra = $_POST['contra'];
if($email != "" || $contra != ""){
  $sql = "SELECT * FROM usuario WHERE Correo = '$email' AND Contrasena = '$contra'";
  $resultado = Database::ejecutar_sql($sql);

  if($resultado == 1) {
    ?>
    <a href="../templates/menu.php"><button>Ingresar</button></a>
  <?php }  
}
else{ ?>
  <a href="../templates/index.php"><button>Regresar</button></a>
<?php }
?>