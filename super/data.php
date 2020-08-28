<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("213.190.6.169", "u641609375_SYEBEL", "555Cma621", "u641609375_SYEBEL");  
      $query = "SELECT cliente, ubicacion, correo, productos.nombre, nombre_artista, nombre_artista2, nombre_proyecto, nombre_productora, descripcion, estatus_ilustrador
        FROM proyectos 
        INNER JOIN productos ON productos.id = proyectos.id_producto
        WHERE proyectos.id = '".$_POST["employee_id"]."'";  
      
       $query2 = "SELECT imagen, tipo FROM imagenes 
        WHERE tipo in (1,2,3)
        AND id_proyecto = '".$_POST["employee_id"]."'";  


       $result = mysqli_query($connect, $query); 

       $result2 = mysqli_query($connect, $query2); 
     
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
            $estatus = '';
            if($row[9] == 3)
            {
              $estatus = 'Color';
            } 
            else if($row[9] == 2)
            {
              $estatus = 'Line Art';
            }
             else if($row[9] == 1)
            {
              $estatus = 'Sketch';
            }

           $output .= '  
                <tr>  
                     <td width="30%"><label>Cliente</label></td>  
                     <td width="70%">'.$row[0].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Ubicacion</label></td>  
                     <td width="70%">'.$row[1].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Correo</label></td>  
                     <td width="70%">'.$row[2].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Tipo Proyecto</label></td>  
                     <td width="70%">'.$row[3].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Artista</label></td>  
                     <td width="70%">'.$row[4].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Coloborador</label></td>  
                     <td width="70%">'.$row[5].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Nombre Proyecto</label></td>  
                     <td width="70%">'.$row[6].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Productora</label></td>  
                     <td width="70%">'.$row[7].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Descripcion</label></td>  
                     <td width="70%">'.$row[8].'</td>  
                </tr> 
                 <tr>  
                     <td width="30%"><label>Estatus del Proyecto</label></td>  
                     <td width="70%">'.$estatus.'</td>  
                </tr> 
                
                ';  
      }  
      $output .= "</table></div>";  
      while($row2 = mysqli_fetch_array($result2))  
      { 
        $output .= '
        
          <img src="data:image/(gif|png|jpeg);base64,'.base64_encode($row2[0] ).'" class="img-thumbnail" >
        ';
        $output .= '</img>';
      }
      echo $output;  
 }  
 ?>
