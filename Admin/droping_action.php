<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
         


         
         $Position=$_POST['position'];
         $Address=$_POST['address'];
         $Contact=$_POST['contact'];
         $Name=$_POST['name'];
         
        $sql = "INSERT INTO droping_center VALUE('','$Position','$Address','$Contact','$Name')";
           
          mysqli_query($con, $sql); 

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                               header("Location: droping.php");
                             
                    }
                    
                    
        ?>