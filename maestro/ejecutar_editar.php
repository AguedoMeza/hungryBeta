
<?php 

	include '../configuracion/conexion.php';
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtGrupo"];
    

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');


   


	$qry = "UPDATE materias 
			SET nombre = '$p_nombre'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"indexMaestro.php\" </script>";

?>