<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
            
  if(isset($_POST['submit']))          
      { 
        
        $fname = $_FILES['image']['name'];
                  $temp = $_FILES['image']['tmp_name'];
                  $fsize = $_FILES['image']['size'];
                  $extension = explode('.',$fname);
                  $extension = strtolower(end($extension));  
                  $fnew = uniqid().'.'.$extension;
                  $store = "Files/profile_blog/".basename($fnew);                    
                if($extension == 'jpg'||$extension == 'png'||$extension == 'gif'||$extension == 'jpeg'||$extension == 'webp')
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
                   $sql = "INSERT INTO blog (title,name,description,image) VALUE('".$_POST['title']."','".$_POST['name']."','".$_POST['description']."','".$fnew."')";
                    
                  mysqli_query($con, $sql); 
                  move_uploaded_file($temp, $store);

              $success =  '<div class="alert alert-success alert-dismissible fade show">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                              </div>';
                              header("Location: blog.php");
                             
                    }
                  }
                  elseif($extension == '')
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <strong>select image</strong>
                                        </div>';
                }
                else
                    {
                      $error =  '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>invalid extension!</strong>png, jpg, Gif are accepted.
                              </div>';
                }
             
          }
                    
                    
        ?>