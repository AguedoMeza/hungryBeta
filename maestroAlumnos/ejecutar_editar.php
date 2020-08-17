
<?php 

	include '../configuracion/conexion.php';
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtNombre"];
	$p_usuario=$_POST["txtUsuario"];
	$p_contrasena=$_POST["txtContrasena"];

	echo $p_id=$_POST["id"];
	echo $p_nombre=$_POST["txtNombre"];
	echo $p_usuario=$_POST["txtUsuario"];
	echo $p_contrasena=$_POST["txtContrasena"];
    

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');


   


	$qry = "UPDATE usuarios
			SET nombre = '$p_nombre',
			usuario = '$p_usuario',
			pass = '$p_contrasena'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"indexAlumnos.php\" </script>";

?>