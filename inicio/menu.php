<div class="sidebar-collapse">
	<ul class="nav" id="main-menu">
	
		<br>
        <?php

        session_name("login_supsys");
        session_start();

        $sAutentificado=$_SESSION["autentificado"];
        $sTipoUsuario=$_SESSION["sTipoUsuario"];

        if ($sAutentificado!="SI"){
        ?>
           <li><a class='active-menu'  href='../inicio/index.php' ><i class='fa fa-home fa-1x'></i>Inicio</a></li>
        <?php 
	        }
	        else{
	         if($sTipoUsuario==1){
         ?>
             <li><a class='menu' href='../inicio/index.php' ><i class='fa fa-home fa-1x'></i>Index</a></li>
            <li><a class='menu' href='../gallery/index.php' ><i class='fa fa-home fa-1x'></i>Productos</a></li>
           

           
			
			
		<?php 
		}
		if ($sTipoUsuario==2) 
		{
		?>
		
		<?php
		}
		if ($sTipoUsuario==3) {
		?>
			
		<?php
		}
	}
		 ?>
		 