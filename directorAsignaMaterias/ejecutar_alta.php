
<?php 
   
    include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
	
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$idMateria=$_POST["id_materia"];
	

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');

	
         



	$qry = "INSERT INTO d_grupos_materias (id_grupo, 
	        id_materia) 
	        VALUES (
	        '$p_id',
	        '$idMateria')";
	




		
	   $actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	   echo"<script language=\"javascript\">window.location=\"indexAsignar.php\" </script>";

?>