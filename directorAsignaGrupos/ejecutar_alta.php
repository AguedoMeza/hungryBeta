
<?php 
   
    include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
	
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$idMaestro=$_POST["id_maestro"];

	echo $p_id;
	echo $idMaestro;
	

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');

	
         



	$qry = "INSERT INTO d_grupos_maestros (id_grupo, 
	        id_usuario) 
	        VALUES (
	        '$p_id',
	        '$idMaestro')";
	




		
	   $actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	   echo"<script language=\"javascript\">window.location=\"indexAsignar.php\" </script>";

?>