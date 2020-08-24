 <?php 

   

    include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
    
    $s_idUsuario = $_SESSION["s_IdUser"];

    $qry = "SELECT id, nombre, descripcion, fecha_cierre, enlace, activo FROM contenidos";
    $consulta = mysqli_query($conexion, $qry);
 ?>
    
 
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Listado de Contenidos</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Entrega</th>
                                            <th scope="col">Archivo</th>
                                            <th scope="col">Activo</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
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
                                            <td><a ><?php echo $row[4]; ?></a></td>
                                             
                                            <td align="center">

                                                <?php 
                                                if ($row[5]==1) {
                                                    $valor = "checked";
                                                }
                                                if ($row[5]==0) {
                                                    $valor="";
                                                }
                                                ?>
                                                    <?php echo "<input type='checkbox' id='status' $valor onclick='OnChangeCheckbox (this)' data-id='$row[0]'/>"; ?>
                                            </td>
                                             
                                            <td align="center">
                                               <a href="formulario_editar.php?id=<?php echo $row[0] ?>"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
                                            </td>
                                            <td><a href="ejecutar_eliminar.php?id=<?php echo $row[0] ?>"><i class="fa fa fa-ban fa-2x color-icono" aria-hidden="true"></i></a></td>
                                        </tr>
                                    <?php 
                                        }
                                    ?>   
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

       
                             