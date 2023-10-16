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
                <h2>VOLUNTEERING & INTERNSHIP </h2>
                <ul>
                    <li class="nav-item"> <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-angle-double-right"></i> Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="disaster.php"><i class="fas fa-angle-double-right"></i> Volunteering & Internship</a></li>
                </ul>
            </div>
        </div>
    </div>
                
                  
 <!--  ************************* About Us Starts Here ************************** -->    
       
<
   
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  
                <h2>Apply To Volunteer</h2>
                <form id="application-form" action="voluntering_action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID:</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="name">Education Qualification:</label>
                        <input type="text" class="form-control" id="name" name="Qualification" >
                    </div>
                
                    <div class="form-group">
                        <label for="resume">Upload Resume:</label>
                        <input type="file" class="form-control-file" id="resume" name="image" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Make a Smile</button>
                </form>
            
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/AboutGal/1.jpg" alt="">
                  <br>
                  <p><center>Flood 2018 Relief Missions</center></p>
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                <img src="assets/images/AboutGal/2.jpeg" alt="">
                <br>
                <p><center>Volunters Making Impacts At Tribal Development</center></p>
              </div>
              <div class="col-md-6 mv-det">
                 
                   <h2>Apply To Internships</h2>
                <form id="application-form" action="internships_action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID:</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="name">Education Qualification:</label>
                        <input type="text" class="form-control" id="name" name="edu" >
                    </div>
                
                    <div class="form-group">
                        <label for="resume">Upload Resume:</label>
                        <input type="file" class="form-control-file" id="resume" name="image" accept=".pdf,.doc,.docx" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Make a Impact</button>
                </form>

    


                   </p>
              </div>
          </div>
          
      </div>
  </section>   
   

    
     <!-- ################# Events Start Here#######################--->
   

   
   
    
          
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