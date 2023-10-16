<?php
           include("Admin/connection/config.php");
            error_reporting(0);
            session_start();
            // if($_SESSION['username'] != 'admin'){
            //       header("location:login.php");
            //       die();
            //    }
            if(isset($_POST['submit']))          
                { 
                  $fname = $_FILES['image']['name'];
                  $temp = $_FILES['image']['tmp_name'];
                  $fsize = $_FILES['image']['size'];
                  $extension = explode('.',$fname);
                  $extension = strtolower(end($extension));  
                  $fnew = uniqid().'.'.$extension;
                  $store = "Admin/Files/Resume_Intern/".basename($fnew);                    
                if($extension == 'pdf'||$extension == 'doc'||$extension == 'docx')
                  {        
                    if($fsize>=100000000)
                        {
                          $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Max Image Size is 1024kb!</strong> Try different Image.
                                  </div>';
                    }
                    else
                        { 
                        $sql = "INSERT INTO internships(name,mobile_number,email_id,qualification,resume) VALUE('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['edu']."','".$fnew."')";// store the submited data ino the database :images
                          echo $sql;
                        mysqli_query($con, $sql); 
                        move_uploaded_file($temp, $store);
                        $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 News Added Successfully.
                              </div>';
                              header("Location: Voluntering.php");
                        }
                    }
                elseif($extension == '')
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <strong>Select File</strong>
                                        </div>';
                }
                else
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>invalid extension!</strong>pdf, doc, docx are accepted.
                              </div>';
                }
             
          }
        ?>  