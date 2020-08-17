

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
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../super/indexMaestroContenido.php"> <i class="menu-icon fa fa-dashboard"></i>Panel de Super Usuario </a>
                    </li>
                    <h3 class="menu-title">Administracion</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Formularios</a>
                       <ul class="sub-menu children dropdown-menu">
                          
                            

                            <li><i class="fa fa-bars"></i><a href="../super/indexMaestroContenido.php">Inicio</a></li>
                        
                          
                        </ul>
                    </li>
                    
                </ul>
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
                        <h1>PANEL DE SUPER USUARIO</h1>
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
                   
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


           <?php 
              include 'listaAlumnos.php';
            ?>
            <!--/.col-->

           
            <!--/.col-->

            
            <!--/.col-->

           
            <!--/.col-->

          
            <!--/.col-->


           
            <!--/.col-->


            
            <!--/.col-->


            
            <!--/.col-->

            <div class="col-xl-12">
                 <div class="col-xl-12">
                   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Alta de Usuarios</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                      
                                        <hr>
                                        <form action="ejecutar_alta.php" method="POST" id="formulario">
                                             <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                      
                                                        <span id="payment-button-amount">Crear Usuario</span>
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                           
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre del Usuario</label>
                                                <input id="txtGrupo" name="txtNombre" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre de Usuario</label>
                                                <input id="txtUsuario" name="txtUsuario" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                 <div class="form-group">
                                                <!-- inicio -->
                                              <label for="id_sucursal">Usuario: </label>
                                
                                              <select class="form-control" name="departamento" id="departamento" required > <!-- multiple="multiple" -->
                                              <option  value="" disabled selected>Selecciona el depatamento</option>
                                             <?php 
                                             $result = mysqli_query($conexion, "SELECT id, nombre
                                             FROM departamentos");
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
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Contrasena</label>
                                                <input id="txtPass" name="txtPass" type="password" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                          
                                               
                                                
                                              
                                               
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
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
    <script type="text/javascript">
        function OnChangeCheckbox (checkbox) {
            ajax = function(url){
                var xhr = window.XMLHttpRequest ? 
                          new XMLHttpRequest() : 
                          new ActiveXObject("Microsoft.XMLHTTP") || 
                          new ActiveXObject("Msxml2.XMLHTTP");
         
                xhr.open("GET", url, true);
                xhr.send(null);
            };
        var estado = checkbox.checked ? 1 : 0, //Si está marcado, asigno 1 a 'estado', si no, 0
        id = checkbox.getAttribute("data-id"), //El valor del pseudo-atributo 'data-id'
        url = "editar_estado.php?estado=" + estado + "&id=" + id;
        ajax(url); 

        if (estado==0) {
            alert("El registro se ha desactivado");
        };
        if (estado==1) {
            alert("El registro ha sido activado");
        };
        }
    </script>


</body>

</html>
