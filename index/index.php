<!doctype html>
<html lang="en">
<?php
    include("Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AVARD  | Apex Voluntary Agency for Rural Development |NGO for Social Cause</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >

<header class="continer-fluid ">
    <div  class="header-top" style="background-color: orange; height: 70px;">
        <div class="container">
            <div class="row col-det">
                
                <marquee style="color: white;">
                    <ul class="list-group list-group-horizontal">
                        <?php
                            $result=mysqli_query($con,"SELECT * FROM news order by id desc limit 3");
                            while ($user_data=mysqli_fetch_array($result)) {                 
                        ?>
                      <li ><h3 style="font-size: 20px; color: white; margin-top: 15px;"><?php echo $user_data['news_feed'] ?></h3></li>
                        <?php } ?>
                    </ul>
                </marquee>
            
            </div>
        </div>
    </div>
    <div  class="header-top" style="margin-left: 20px; margin-right: 20px;">
        <div class="containe">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block" style="margin-top: 10px;">
                    <ul class="ulleft" >
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:name@email.com" style="color: black;"><i class="far fa-envelope"></i>
                            avardbhavan@gmail.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+919497315058" style="color: black;"><i class="fas fa-phone-volume"></i>
                            +91 9497315058</a></li>
                    </ul>
                    
                </div>
                <div class="col-lg-3 col-md-6 folouws">

                    <div class="main">
                        <div class="form-group has-search">
                            <a href="#"><span class="fa fa-search form-control-feedback"></span></a>
                            <input type="text" class="form-control" placeholder="Search">
                            
                        </div>
                    </div>
                  
               
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="donate.php"  class="btn btn-sm" style="background-color:#0033cc; color:white;">Donate</a>
                   <!--  <select class="btn btn-sm btn-default">
                        <option>English</option>
                        <option>Malayalam</option>
                    </select> -->
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="">
            <div class="row nav-row "  style="margin-left:10px; margin-right:10px;">
                <div class="col-lg-2 col-md-12 logo" >
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="logoImage" style="height: 50px;  margin-top: 5px;">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i style="color: white;" class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-10 col-md-12 d-none d-lg-block nav-col ">
                            <!-- <a href=""><img src="assets/images/kuda.png" alt="logoImage" style="width: 60px; height: auto; margin-top: 10px;"></a> -->
                            <nav class="navbar navbar-expand-sm bg-dar navbar-dark" id="menu" >
  
                              <ul class="navbar-nav navbad">
                               
                                
                                <li></li>

                                <li class="nav-item active">
                                  <a class="nav-link new text-center" href="index.php" >Home</a>
                                </li>
                                
                                
                               
                                <li class="nav-item dropdown">
                                  <a class="nav-link new  dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown">
                                    About
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-center" href="about_us.php">About Us</a>
                                    <!-- <a class="dropdown-item" data-toggle="dropdown" href="#">People Behind Smile<i style="margin-left: 10px;" class="fa fa-angle-right"></i>
                                        <div class="dropdown-menu" style="margin-left: 220px;">
                                          <a class="dropdown-item" href="Leader.php">Leader</a>
                                          <a class="dropdown-item" href="Mentor.php">Mentor</a>
                                          <a class="dropdown-item" href="team.php">Our People</a>
                                        </div>
                                    </a> -->
                                    <a class="dropdown-item  text-center " href="team.php">Our Team</a>
                                    <!-- <a class="dropdown-item " href="Reach.php">Reach & Presence</a> -->
                                    <a class="dropdown-item text-center " href="Impact.php">Impact At</a>
                                    
                                    <!-- <a class="dropdown-item " href="un.php">UN Recognitions</a> -->
                                    <a class="dropdown-item  text-center" href="messages.php">Our Views</a>
                                    <a class="dropdown-item  text-center" href="mile_stones.php">Mile Stones</a>
                                    <a class="dropdown-item text-center" href="Governance.php">Good Governance</a>
                                  </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link new dropdown-toggle text-center" href="#" id="navbardrop"  data-toggle="dropdown">
                                    What We Do
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-center" href="administration.php">Administration</a>
                                    <a class="dropdown-item text-center" href="family_development.php">Family Development</a>
                                    <a class="dropdown-item text-center " href="disaster.php">Disaster Management</a>
                                    
                                    <a class="dropdown-item text-center " href="research.php">Research And Training</a>
                                    <a class="dropdown-item text-center" href="agriculture.php">Agriculture Department</a>
                                    <a class="dropdown-item text-center " href="community.php">Community Based Organizations</a>
                                    <a class="dropdown-item text-center " href="rehabilitation.php">Rehabilitation Programme for the Disabled</a>
                                    
                                    
                                    
                                    
                                    
                                  </div>
                                </li>
                                
                                <li class="nav-item dropdown">
                                  <a class="nav-link new dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown">
                                    Media Center
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-center " href="blog.php">Blog</a>
                                    <a class="dropdown-item text-center" href="image_gallery.php">Image Gallery</a>
                                    <a class="dropdown-item text-center " href="video_gallery.php">Video Gallery</a>

                                    
                                    <!-- <a class="dropdown-item " href="news.php">News Letter</a> -->

                                  </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link new dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown">
                                    Campaign
                                  </a>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item text-center " href="Sarga.php">SARGA</a>
                                     <a class="dropdown-item text-center " href="Medal.php">MEDALS</a>
                                    <!-- <a class="dropdown-item " href="Ganangal.php">Ganams</a> -->
                                    <a class="dropdown-item text-center " href="insurance.php">Insurance</a>
                                   <a class="dropdown-item text-center" href="mithra.php">Dialysis Mithra</a>
                                    
                                  </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link new dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown">
                                    Get Involved
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-center " href="Careers.php">Careers</a>
                                    <a class="dropdown-item text-center" href="Individual.php">Individual Support</a>
                                    <a class="dropdown-item text-center " href="Corporate.php">Corporate Support</a>
                                    <a class="dropdown-item text-center " href="School.php">School Partnership</a>
                                    <a class="dropdown-item text-center " href="Voluntering.php">Volunteers & Internships</a>
                                    
                                    <!-- <a class="dropdown-item " href="Work.php">Work With Us</a> -->
                                  </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link new dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown">
                                    Contribute
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-center " href="testimonials.php">Testimonails</a>
                                    <a class="dropdown-item text-center" href="Droping.php">Dropping Center</a>
                                    
                                    
                                  </div>
                                </li>
                                <li class="nav-item active">
                                  <a class="nav-link new text-center" href="contact_us.php" >Contact Us</a>
                                </li>
                              </ul>
                            </nav>
                </div>
            </div>
        </div>
    </div> 
</header>
    
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />            
            
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>