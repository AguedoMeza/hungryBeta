 <?php 

   

    include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
    
    $s_idUsuario = $_SESSION["s_IdUser"];

    $qry = "SELECT id, nombre_proyecto, descripcion, fecha_entrega, activo, imagen FROM proyectos where activo = 1 and id_usuario_asignado = '$s_idUsuario'";
    $consulta = mysqli_query($conexion, $qry);
 ?>
    
 
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Listado de Proyectos</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Entrega</th>
                                           
                                            <th scope="col">Ver contenido</th>
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
                                            <td><?php echo $row[3]; ?></td>
                                            
                                           <td align="center">
                                               <a href="formulario_asignar.php?id=<?php echo $row[0] ?>"><i class="fa fa-file-archive-o fa-2x color-icono" aria-hidden="true"></i></a>
                                            </td>
                                             
                                          
                                        </tr>
                                    <?php 
                                        }
                                    ?>   
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

       
                             