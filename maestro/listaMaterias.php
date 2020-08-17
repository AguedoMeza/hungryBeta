 <?php 
include '../configuracion/conexion.php';
    $qry = "SELECT materias.id, materias.nombre FROM d_grupos_materias 
            INNER JOIN materias
            ON materias.id = d_grupos_materias.id_materia
            INNER JOIN d_grupos_maestros
            ON d_grupos_maestros.id_grupo = d_grupos_materias.id_grupo
            WHERE d_grupos_maestros.id_usuario = '$s_idUsuario'";
    $consulta = mysqli_query($conexion, $qry);
 ?>
    
 <?php 
    while($row = mysqli_fetch_array($consulta))
      {   ?>
         <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="dropdown-menu-content">
                                            
                                            <a href="formulario_editar.php?id=<?php echo $row[0] ?>" class="dropdown-item"><i aria-hidden="true">Editar</i></a>
                                            <a href="ejecutar_eliminar.php?id=<?php echo $row[0] ?>" class="dropdown-item"><i aria-hidden="true">Eliminar</i></a>
                                            
                                          
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <p class="text-light"><?php echo $row[1]; ?></p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                    <canvas id="widgetChart1"></canvas>
                                </div>

                            </div>

                        </div>
                    </div>

       <?php 
        }
       ?>
                             