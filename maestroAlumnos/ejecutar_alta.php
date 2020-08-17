
<?php 

	include '../configuracion/conexion.php';
	
	session_name("login_supsys"); 
    session_start(); 
    $s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtNombre"];
	$usuario=$_POST["txtUsuario"];
	$pass=$_POST["txtPass"];
	$grupo=$_POST["id_grupo"];

    

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');



	$qry = "INSERT INTO usuarios (id_tipo_usuario, id_maestro_registro, id_grupo, nombre, usuario, pass, activo) VALUES (4, '$s_idUsuario','$grupo', '$p_nombre', '$usuario', '$pass', 1)";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"indexAlumnos.php\" </script>";

?>