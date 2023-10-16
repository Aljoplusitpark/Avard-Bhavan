<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
         


         
         $Position=$_POST['position'];
         $Qualification=$_POST['qualification'];
         $Location=$_POST['location'];
         
         
         

          $sql = "INSERT INTO job_hosting VALUE('','$Position','$Qualification','$Location')";
           
          mysqli_query($con, $sql); 

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                               header("Location: job_hosting.php");
                             
                    }
                    
                    
        ?>