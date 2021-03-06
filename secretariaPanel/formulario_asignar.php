<?php
        include '../configuracion/conexion.php';
        $id = $_GET["id"];
                            
        $qry = "SELECT id, nombre FROM departamentos 
                WHERE id = '$id'";
                            
                                    
        $consulta = mysqli_query($conexion,$qry);
                                    
        $row=mysqli_fetch_row($consulta);

        $id=$row[0];
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEMA</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
    <script src="../jquery-3.2.1.min.js"></script>

   
   

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a> -->
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <!-- <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="indexMaestroContenido.php"> <i class="menu-icon fa fa-dashboard"></i>Panel de Secretaria </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Formularios</a>
                       <ul class="sub-menu children dropdown-menu">
                          
                            <li><i class="fa fa-bars"></i><a href="indexMaestroContenido.php">Contenidos</a></li>
                            <li><i class="fa fa-bars"></i><a href="../maestro/indexMaestro.php">Creacion de Materias</a></li>
                            <li><i class="fa fa-bars"></i><a href="../maestroAlumnos/indexAlumnos.php">Creacion de Usuarios</a></li>
                             
                        </ul>
                    </li>
                    
                </ul>
            -->
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>PANEL DE CONTROL</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                         <ol class="breadcrumb text-right">
                            
            <a href="../login/cerrarsesion.php" class="btn btn-danger"><li class="active">CERRAR SESION</li></a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    Creacion de proyectos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


          
            <!--/.col-->

           
            <!--/.col-->

           
            <!--/.col-->

            
            <!--/.col-->

          
            <!--/.col-->


           
            <!--/.col-->


            
            <!--Formulario-->

            <div class="col-xl-12">
                   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Asignacion de Proyecto a <?php echo $row[1]; ?></strong>
                            </div>
                            <div class="card-body">
                               
                                <div id="pay-invoice">
                                    <div class="card-body">
                                      
                                        <hr>
                                        <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                                                 <div>
                                                    
                                                     <input type="submit" name="insert" id="insert" value="Crear Proyecto" class="btn btn-lg btn-info btn-block" />

                                                      
                                                       
                                                </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row[0] ?>" style="visibility:hidden">
                                            </div> 
                                          
                                                <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre del cliente</label>
                                                <input id="txtNombreCliente" name="txtNombreCliente" type="text" class="form-control" aria-invalid="false" value="" >
                                                </div>
                                                 <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Ubicacion Cliente</label>
                                                <input id="txtUbicacion" name="txtUbicacion" type="text" class="form-control" aria-invalid="false" value="" placeholder="EJEMPLO FB DANNY LAMP">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Correo</label>
                                                <input id="txtCorreo" name="txtCorreo" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" >
                                            </div>
                                            <div class="form-group">
                                                <!-- inicio -->
                                              <label for="id_sucursal">Tipo Poryecto: </label>
                                
                                              <select class="form-control" name="producto" id="producto" required > <!-- multiple="multiple" -->
                                              <option  value="" disabled selected>Selecciona el tipo de proyecto</option>
                                             <?php 
                                             $result = mysqli_query($conexion, "SELECT id, nombre
                                             FROM productos where id_departamento = '$id'");
                                             ?>
                                             <?php
                                              while ($row=mysqli_fetch_array($result))
                                               {
                                                 echo "<option value='$row[0]'>$row[1]</option>";
                                               }
                                             ?>
                                             </select>
                                                <!-- fin -->
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Artista</label>
                                                <input id="txtArtista" name="txtArtista" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Artista Coloborador(No requerido)</label>
                                                <input id="txtColoborador" name="txtColoborador" type="text" class="form-control"  aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre del proyecto</label>
                                                <input id="txtNombreProyecto" name="txtNombreProyecto" type="text" class="form-control"  aria-invalid="false" value="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Productora</label>
                                                <input id="txtNombreProductora" name="txtNombreProductora" type="text" class="form-control" aria-invalid="false" value="" >
                                            </div>
                                           
                                               
                                                
                                                
                                                
                                                
                                                 <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">Descripcion</label>
                                                    <textarea id="txtDescripcion" name="txtDescripcion" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number" ></textarea>
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>
                                              
                                               <div class="form-group has-success">
                                                
                                                <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
                                                <br />

                                               </div>
                                                 
                                               
                                               </form>

                                                </div>
                                                

                                               
                                        </form>
                                                
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
            </div>
            
            <!-- modal -->
            <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
  
            


           


           



            

            <div class="col-xl-6">
               
                <!-- /# card -->
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    <script>  
$(document).ready(function(){

    load_images();

    function load_images()
    {
        $.ajax({
            url:"fetch_images.php",
            success:function(data)
            {
                $('#images_list').html(data);
            }
        });
    }
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
    
          $.ajax({
                url:"insert.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    $('#txtNombreCliente').val('');
                    $('#txtCorreo').val('');
                    $('#txtArtista').val('');
                    $('#txtColoborador').val('');
                    $('#txtNombreProyecto').val('');
                    $('#txtNombreProductora').val('');
                    $('#txtDescripcion').val('');
                    $('#enlace').val('');
                    $('#fechaEntrega').val('');
                    $('#producto').val('');
                    $('#txtUbicacion').val('');
                    load_images();
                    alert("Has creado el proyecto correctamente");
                    window.location="indexMaestroContenido.php";
                }
            });
       
    });
 
});  
</script>


   

</body>

</html>
