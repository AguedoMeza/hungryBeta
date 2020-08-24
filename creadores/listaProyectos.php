 <?php 

   

    include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
    
    $s_idUsuario = $_SESSION["s_IdUser"];
    $departamento = $_SESSION["sTipoUsuario"];

    $qry = "SELECT proyectos.id, proyectos.nombre_proyecto, productos.nombre, activo
FROM proyectos 
INNER JOIN productos ON productos.id = proyectos.id_producto
where activo = 1 
and id_usuario_asignado = '$s_idUsuario'";
    $consulta = mysqli_query($conexion, $qry);
 ?>
    
 
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Listado de Proyectos Prueba</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titulo Proyecto</th>
                                            <th scope="col">Tipo de Proyecto</th>
                                            
                                           
                                            <th scope="col">Ver contenido</th>
                                            <th scope="col">Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                       while($row = mysqli_fetch_array($consulta))
                                        {   
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $row[0]; ?></th>
                                            <td><?php echo $row[1]; ?></td>
                                            <td><?php echo $row[2]; ?></td>
                                            
                                            
                                           <td align="center">
                                               <a href="formulario_asignar.php?id=<?php echo $row[0] ?>"><i class="fa fa-file-archive-o fa-2x color-icono" aria-hidden="true"></i></a>
                                            </td>
                                             <?php 
                                            if($departamento == 2)
                                             {   
                                             ?>
                                            <td align="center">
                                               <a href="formulario_estatus.php?id=<?php echo $row[0] ?>"><i class="fa fa-thumbs-o-up fa-2x color-icono" aria-hidden="true"></i></a>
                                            </td>
                                             <?php 
                                            }
                                            ?> 
                                             
                                          
                                        </tr>
                                    <?php 
                                        }
                                    ?>   
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

       
                             