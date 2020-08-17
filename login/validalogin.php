<?php
/////////////////////////////////////////////parte de sesiones
include("../configuracion/conexion.php");

/////////////////////////////
$pUser=$_POST["usuario"];
$pContra= $_POST["contrasena"];


$qry = "SELECT id, usuario, pass, id_departamento, nombre FROM usuarios WHERE usuario = '$pUser' AND pass = '$pContra' AND activo = '1'";

$consulta = mysqli_query($conexion, $qry) or die (mysqli_error());					   
$row = mysqli_fetch_array($consulta);
$num = mysqli_num_rows($consulta);


if($num==1)
{
	session_name("login_supsys");
	session_start();
	$_SESSION["autentificado"]= "SI";
	$_SESSION["s_IdUser"]= $row[0];
	$_SESSION["s_IdNameUser"]= $row[1];
	$_SESSION["s_IdPass"]= $row[2];
	$_SESSION["sTipoUsuario"]= $row[3];
	$_SESSION["nombrePersona"]= $row[4];

	$tipo = $_SESSION["sTipoUsuario"]= $row[3];

	if ($tipo == 5) 
	{
		//header("Location: ../director/indexDirector.php");
		//header("Location: ../maestroContenido/indexMaestroContenido.php");
		header("Location: ../super/indexMaestroContenido.php");

	}
	else if ($tipo == 1) 
	{
		header("Location: ../maestroContenido/indexMaestroContenido.php");
	}
	else if ($tipo == 2 || $tipo == 3 || $tipo == 4 ) 
	{
		header("Location: ../alumnos/indexAlumnos.php");
	}
	
	

	

}
else
{
	header("Location: login.php?ErrorAutentificacion");
}


?>