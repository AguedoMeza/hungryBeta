<?php 
//incluir conexion
	 include '../configuracion/conexion.php';
	$s_idUsuario = $_SESSION["s_IdUser"];
//include '../global_seguridad/verificar_sesion.php';

//Se recuperan las variables GET
$g_id = $_GET['id'];


//se extrae de una funcion date 
date_default_timezone_set('America/Monterrey');
$p_fecha=date("Y-m-d"); 
$p_hora=date ("h:i:s");

//Se crea la consulta
$actualizar_estado= "DELETE FROM d_grupos_materias WHERE id = '$g_id'";

//Se ejecuta la sentencia en la clase
$result = mysqli_query($conexion, $actualizar_estado);
echo"<script language=\"javascript\">window.location=\"indexAsignar.php\" </script>";


 ?>