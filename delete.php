<?php   
 include 'db.php';  
 if (isset($_POST['name'])) {  
      $name = $_POST['name'];  
      $query = "DELETE FROM enrolling_form WHERE slno = '$name'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:index.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  