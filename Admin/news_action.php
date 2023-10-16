<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
         


         
         $LeadsPhoneNumber=$_POST['news_feed'];
         
         
         

          $sql = "INSERT INTO news VALUE('','$LeadsPhoneNumber')";
           
          mysqli_query($con, $sql); 

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                               header("Location: news_feed.php");
                             
                    }
                    
                    
        ?>