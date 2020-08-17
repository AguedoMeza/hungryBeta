 <?php 
include '../configuracion/conexion.php';

    session_name("login_supsys"); 
    session_start(); 
    
    $s_idUsuario = $_SESSION["s_IdUser"];


    $qry = "SELECT id, nombre, telefono, direccion, activo FROM escuelas
            WHERE id_usuario = '$s_idUsuario'";
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
                                     <?php 
                                                if ($row[4]==1) {
                                                    $valor = "checked";
                                                }
                                                if ($row[4]==0) {
                                                    $valor="";
                                                }
                                                ?>
                                                    <?php echo "<input  class='btn bg-transparent dropdown-toggle theme-toggle text-light' type='checkbox' id='status' $valor onclick='OnChangeCheckbox (this)' data-id='$row[0]'/>"; 
                                                    ?>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="dropdown-menu-content">
                                            
                                            <a href="formulario_editar.php?id=<?php echo $row[0] ?>" class="dropdown-item"><i aria-hidden="true">Editar</i></a>

                                            <a href="ejecutar_eliminar.php?id=<?php echo $row[0] ?>" class="dropdown-item">Eliminar</a>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <p class="text-light"><?php echo $row[1]; ?></p>
                                <p class="text-light">Telefono: <?php echo $row[2]; ?></p>
                                <p class="text-light">Direccion: <?php echo $row[3]; ?></p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                    <canvas id="widgetChart1"></canvas>
                                </div>

                            </div>

                        </div>
                    </div>

       <?php 
        }
       ?>
                             