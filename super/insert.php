<?php

//insert.php

include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
	
	$s_idUsuario = $_SESSION["s_IdUser"];

    $p_id=$_POST["id"];
	$p_cliente=$_POST["txtNombreCliente"];
	$p_correo=$_POST["txtCorreo"];
	$p_artista=$_POST["txtArtista"];
	$p_coloborador=$_POST["txtColoborador"];
	$p_proyecto=$_POST["txtNombreProyecto"];
	$p_productora=$_POST["txtNombreProductora"];
	$descripcion=$_POST["txtDescripcion"];
	$enlace=$_POST["enlace"];
	$fecha_entrega=$_POST["fechaEntrega"];

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');

	 $qry = "INSERT INTO proyectos (id_departamento, 
	        id_secretaria, 
	        cliente, 
	        correo, 
	        nombre_artista, 
	        nombre_artista2,
	        nombre_productora,
	        nombre_proyecto,
	        descripcion,
	        fecha_publicacion, 
	        fecha_entrega, 
	        activo) 
	        VALUES (
	        '$p_id',
	        '$s_idUsuario',
	        '$p_cliente',
	        '$p_correo',
	        '$p_artista',
	        '$p_coloborador',
	        '$p_productora',
	        '$p_proyecto',
	        '$descripcion',
	        '$fecha',
	        '$fecha_entrega',
	        1)";
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