<?php

//insert.php

include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
	
	$s_idUsuario = $_SESSION["s_IdUser"];

    $p_id=$_POST["id"];
	$descripcion=$_POST["txtDescripcion"];
	$estatus=$_POST["estatus"];
	$proyecto=$_POST["idProyecto"];
	

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');

	 if($estatus == 3)
	 {
	 	 $qry = "UPDATE proyectos 
		         SET 
		         estatus_ilustrador = '$estatus',
		         estatus = 1,
		         nota_ilustrador = '$descripcion'
		         WHERE id = '$proyecto'";
	 }
	 else 
	 {
	 	 $qry = "UPDATE proyectos 
	         SET 
	         estatus_ilustrador = '$estatus',
	         nota_ilustrador = '$descripcion'
	         WHERE id = '$proyecto'";
	 }

	 
  $statement = $conexion->prepare($qry);
  $statement->execute();

  //Obtencion del id_proyecto
  $qry = "SELECT id
			FROM proyectos
			ORDER BY id DESC LIMIT 1";
                            
                                    
        $consulta = mysqli_query($conexion,$qry);
                                    
        $row=mysqli_fetch_row($consulta);

        $idProyecto=$row[0];
  //Fin obtencion

  //Segundo Insert
  if(count($_FILES["image"]["tmp_name"]) > 0)
    {
      for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
      {
       
        $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));

        $image_tipo = addslashes(file_get_contents($_FILES["image"]["type"][$count]));

      
       
        $qry2 = "INSERT INTO imagenes (imagen,id_proyecto,tipo) VALUES (('$image_file'),(SELECT id
FROM proyectos
ORDER BY id DESC LIMIT 1),'$image_tipo')";

		  $statement2 = $conexion->prepare($qry2);
		  $statement2->execute();

      }
    }


?>