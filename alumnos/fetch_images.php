<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("213.190.6.169", "u641609375_SYEBEL", "555Cma621", "u641609375_SYEBEL");  
      $query = "SELECT * FROM imagenes WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
     
      while($row = mysqli_fetch_array($result))  
      {  
          $output .= '
  			
  		    <img src="data:image/(gif|png|jpeg);base64,'.base64_encode($row['imagen'] ).'" class="img-thumbnail" >
  			';
  		  $output .= '</img>';
      }  
    
      echo $output;  
 }  
 ?>