
<!doctype html>
<html lang="en">
<?php
    include("Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<head>
    <meta charset="utf-8">
    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/43778865.js"></script>
  <!-- End of HubSpot Embed Code -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AVARD  | Apex Voluntary Agency for Rural Development</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

   
</head>

<body>

<?php 
    include("index/index.php")
?>
  
                 
  <!-- ******************** Slider Starts Here ******************* -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>CAREERS</h2>
                <ul>
                    <li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-angle-double-right"></i> Services</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-angle-double-right"></i> Careers</a></li>
                </ul>
            </div>
        </div>
    </div>
   
    
 

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Join Us</h2>
                <br/>
                <div>
                    <p>
                        
                    </p>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>  
                        
                        <th scope="col">Sl No</th>
                        <th scope="col">Position</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Location</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                          
                             $result=mysqli_query($con,"SELECT * FROM job_hosting order by id desc limit 5  ");
                             $i=0; 
                                
                            while ($user_data=mysqli_fetch_array($result))
                             {  
                             $i++                
                        ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $user_data['position'] ?></td>
                        <td><?php echo $user_data['qualification'] ?></td>
                        <td><?php echo $user_data['location'] ?></td>
                      </tr>
                        <?php } 
                          ?>
                      <!-- <tr>
                        <th scope="row">2</th>
                        <td>Office Staff- Accounts</td>
                        <td>Bachelor's degree in finance, accounting, or a related field, <br/>Along with proficiency in accounting software and strong attention to detail for accurate financial record-keeping.</td>
                        <td>Thrissur,Chalakudy</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Technical Officer</td>
                        <td>BTech in Computer Science and Engineering With 2+ Years of Experence as System Admin</td>
                        <td>Irinjalakuda</td>
                      </tr> -->
                    </tbody>
                  </table>

                  
                  <p>
                    If You doesn't seen a position that fit for you, we will consider your profile for suitable positions in the future.
                  </p>
                  <p>
                    Candidates Who are looking to make an impact with AVARD kindly Send your resume to <b>avardbhavan@gmail.com</b>
                  </p>
            </div>

        </div>
    </section>   
    

   
   
    
          
     <?php 
        include("footer/footer.php")
      ?>
          
    
</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>