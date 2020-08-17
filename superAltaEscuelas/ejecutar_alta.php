
<?php 

	include '../configuracion/conexion.php';
	session_name("login_supsys"); 
    session_start(); 
    
    $s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtNombre"];
	$direccion=$_POST["txtDireccion"];
	$telefono=$_POST["txtTelefono"];
    

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');



	$qry = "INSERT INTO escuelas (
	        id_usuario,
	        nombre, 
	        direccion, 
	        telefono, 
	        activo) VALUES (
	        '$s_idUsuario',
	        '$p_nombre',
	        '$direccion', 
	        '$telefono',
	        1
	    )";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>