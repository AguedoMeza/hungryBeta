
<?php 

	include '../configuracion/conexion.php';
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
	$p_nombre=$_POST["txtNombre"];
	$descripcion=$_POST["txtDescripcion"];
	$enlace=$_POST["enlace"];
	$fecha_entrega=$_POST["fechaEntrega"];

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');


   


	$qry = "UPDATE contenidos 
			SET nombre = '$p_nombre',
			descripcion = '$descripcion',
			enlace = '$enlace',
			fecha_cierre = '$fecha_entrega'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"indexMaestroContenido.php\" </script>";

?>