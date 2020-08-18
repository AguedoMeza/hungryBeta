<?php
        include '../configuracion/conexion.php';
        $idProyecto = $_GET["id"];
                            
        $qry = "SELECT id, nombre_artista, nombre_artista2, nombre_proyecto, nombre_productora, fecha_entrega, descripcion FROM proyectos
                WHERE id = '$idProyecto'";
                            
                                    
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

   
   

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
                                <strong class="card-title">Detalle del Proyecto</strong>
                            </div>
                            <div class="card-body">
                               
                                <div id="pay-invoice">
                                    <div class="card-body">
                                      
                                        <hr>
                                        <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                                                
                                                <div class="form-group">
                                              
                                                 <?php 
                                                   include '../configuracion/conexion.php';
                                                   $qry = "SELECT id, imagen FROM imagenes WHERE id_proyecto = '$idProyecto'";
                                                   $consulta = mysqli_query($conexion, $qry);
                                                 ?>
                                                    
                                                 <?php 
                                                    while($row2 = mysqli_fetch_array($consulta))
                                                      {   ?>
                                                         <a href="#"><i id="<?php echo $row2[0] ?>" class="fa fa-file-image-o fa-2x color-icono view_data" aria-hidden="true"></i></a>

                                                 <?php 
                                                      }
                                                 ?>
    


                                           
                                                </div>
                                                

                                               
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Artista</label>
                                                <input id="txtArtista" name="txtArtista" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row[1] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Artista Coloborador(No requerido)</label>
                                                <input id="txtColoborador" name="txtColoborador" type="text" class="form-control"  aria-invalid="false" value="<?php echo $row[2] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre del proyecto</label>
                                                <input id="txtNombreProyecto" name="txtNombreProyecto" type="text" class="form-control"  aria-invalid="false" value="<?php echo $row[3] ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Productora</label>
                                                <input id="txtNombreProductora" name="txtNombreProductora" type="text" class="form-control" aria-invalid="false" value="<?php echo $row[4] ?>" >
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Fecha de entrega</label>
                                                <input id="fechaEntrega" name="fechaEntrega" type="date" class="form-control"  aria-invalid="false" value="<?php echo $row[5] ?>">
                                            </div>
                                               
                                                
                                                
                                                
                                                
                                                 <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">Descripcion</label>
                                                    <textarea id="txtDescripcion" name="txtDescripcion" type="text" class="form-control cc-number identified visa" value="<?php echo $row[6] ?>" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number" ></textarea>
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>
                                              
                                              <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre Productora</label>
                                                <input id=" txtDescripcion" name=" txtDescripcion" type="text" class="form-control" aria-invalid="false" value="<?php echo $row[4] ?>" >
                                            </div>
                                               
                                               
                                               </form>

                                                </div>
                                                

                                               
                                        </form>
                                                
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
            </div>
            
            <!--/.col-->

            


           


           



            

            <div class="col-xl-6">
               
                <!-- /# card -->
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Modal image preview  -->
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
 

   

    <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch_images.php",  
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
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
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
                    load_images();
                    alert("Has creado el proyecto correctamente");
                }
            });
        }
    });
 
});  
</script>

<!-- Have fun using Bootstrap JS -->


   

</body>

</html>
