
<?php 

	include '../configuracion/conexion.php';
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtMateria"];
	$idGrupo = $_POST["id_grupo"];
    

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');



	$qry = "INSERT INTO materias (nombre, activo) VALUES ('$p_nombre', 1)";
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());

	$qry2 = "INSERT INTO d_grupos_materias (id_materia)
             SELECT id FROM materias ORDER BY id DESC LIMIT 1";
	$actualizar2 = mysqli_query($conexion,$qry2) or die (mysql_error());

	$qry3 = "UPDATE d_grupos_materias
			inner join materias 
			on d_grupos_materias.id_materia = materias.id
			set d_grupos_materias.id_grupo='$idGrupo'
			where materias.id = (SELECT id FROM materias ORDER BY id DESC LIMIT 1)";
	$actualizar3 = mysqli_query($conexion,$qry3) or die (mysql_error());
	
	
	echo"<script language=\"javascript\">window.location=\"indexMaestro.php\" </script>";

?>