 <?php 
   

include '../configuracion/conexion.php';

session_name("login_supsys"); 
session_start(); 
$s_idUsuario = $_SESSION["s_IdUser"];


    $qry = "SELECT usuarios.id, usuarios.nombre, grupos.nombre, d_grupos_maestros.id_grupo FROM usuarios
            INNER JOIN d_grupos_maestros
            ON d_grupos_maestros.id_usuario = usuarios.id
            INNER JOIN grupos
            ON grupos.id = d_grupos_maestros.id_grupo";

    $consulta = mysqli_query($conexion, $qry);
 ?>
    
 <?php 
    while($row = mysqli_fetch_array($consulta))
    {
    $qry = "SELECT materias.id, nombre FROM materias
            INNER JOIN d_grupos_materias 
            ON d_grupos_materias.id_materia = materias.id
            WHERE d_grupos_materias.id_grupo = '$row[3]'";

    $consulta2 = mysqli_query($conexion, $qry);

     ?>
         <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="dropdown-menu-content">
                                    <?php 
                                        while($row2 = mysqli_fetch_array($consulta2))
                                        { 
                                    ?>
                                            
                                             <a href="listadoContenidosMaterias.php?id=<?php echo $row2[0] ?>" class="dropdown-item"><i aria-hidden="true"><?php echo $row2[1]; ?></i></a>
                                            
                                      <?php 
                                        }
                                       ?>    
                                        </div>
                                    </div>
                                </div>
                               
                                <p class="text-light"><?php echo $row[1]; ?></p>
                                <p class="text-light">Grupo: <?php echo $row[2]; ?></p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                    <canvas id="widgetChart1"></canvas>
                                </div>

                            </div>

                        </div>
                    </div>

       <?php 
        }
       ?>
                             