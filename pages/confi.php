<?php 
   
   $servername = "localhost";  
   $username = "root";  
   $password = ""; 

   $database = "rtbsdb"; 
  
    // Create a connection  
    $conn = mysqli_connect($servername,  
        $username, $password, $database); 
  
   if($conn) { 
       echo "Connection Success";  
   }  
   else { 
       die("Connection Failed". mysqli_connect_error());  
   }  
?> 