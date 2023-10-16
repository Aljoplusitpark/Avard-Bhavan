
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
    
    <meta charset="UTF-8">
  <meta name="description" content="AVARD [Apex Voluntary Agency for Rural Development]—a pioneering NGO established in 1986—has dedicated 37 years to uplifting rural areas through eleven Desam Development Societies. Serving Chalakudy, Kodakara, Mala, and Chalakudy Municipality, AVARD empowers marginalized communities. Our interventions span Family Development (FD), Community-Based Organizations (CBO), Rehabilitation of Differently Abled (RDA), Agricultural Department (AD), Local Self Governance (LSG), Disaster Management (DM), and Research and Training (R&T). Join us in transforming lives">
  
  <meta name="author" content="AVARD BHAVAN">

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
    
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

    <link rel="canonical" href="https://avardbhavan.org/about_us.php" />

    <meta property="og:url" content="https://avardbhavan.org/" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="AVARD [Apex Voluntary Agency for Rural Development], established in 1986, has been a pioneering NGO dedicated to rural upliftment for 37 years. Serving marginalized communities across Chalakudy, Kodakara, Mala, and Chalakudy Municipality, AVARD has empowered the underprivileged through eleven registered Desam Development Societies. Our focus areas include Family Development (FD), Community-Based Organizations (CBO), Rehabilitation of Differently Abled (RDA), Agricultural Department (AD), Local Self Governance (LSG), Disaster Management (DM), and Research and Training (R&T). Join us in our mission to create positive change!" />





   
</head>

<body >

<?php 
    include("index/index.php")
?>
  
                 
  <!-- ******************** Slider Starts Here ******************* -->
    <section class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <?php
                $result=mysqli_query($con,"SELECT * FROM banner order by id desc limit 5  ");
                while ($user_data=mysqli_fetch_array($result)) {                 
            ?>
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img">
                        <img src="Admin/Files/banner/<?php echo $user_data['image']; ?>" alt="logoImage">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"><?php echo $user_data['title'] ?></h1>
                                    <p class="slider-text hidden-xs"><?php echo $user_data['description'] ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
            <!-- <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt="logoImage"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt="logoImage"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h2 class="slider-title">Bishop Pauly Kannookadan</h2>
                                <p class="slider-text hidden-xs">I am privileged to be a part of the vision of AVARD to reach out to the unreached and to illuminate light into their lives and to empower them.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-4.jpg" alt="logoImage"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-5.jpg" alt="logoImage"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                           
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>                 
                  
 <!--  ************************* About Us Starts Here ************************** -->    
       
<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2> Our History</h2>
                <p style="font-size: 16px;">Apex Voluntary Agency for Rural Development Reg.No.76/86 [AVARD] formed as a Non-Governmental Organization (NGO) was constituted on 5th of March 1986 under the Travancore Cochin Literary Scientific and Charitable Societies Act of 1955. It is an Apex body of seven member organizations and has pioneered in the social service sector since years. 'The organization's chief operational areas are extended over the 3 Block Panchayaths of Chalakudy, Kodakara & Mala including the Chalakudy Municipality</p>

                <p style="font-size: 16px;"> Since 37 years the organization is working for the upliftment of the rural areas aiming for the integral development of the people through eleven registered Desam Development Societies in five Grama panchayaths - Athirappilly, Pariyaram, Kodassery, Mattathoor and Varandarappilly. AVARD is helping the marginalized and poor people to be in the front line of the society. Our major thrust areas of interventions are Family Development (FD), Community Based Organizations (CBO), Rehabilitation of Differently Abled (RDA), Agricultural Department (AD), Local Self Governance (LSG), Disaster management(DM) and Research and Training (R&T)</p>

                <p style="font-size: 16px;">It gives us immense joy and contentment to see the enormous number of services we rendered throughout these years seems to have nourished happiness in the life of people and have empowered the downtrodden.</p>
               
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <a href="family_development.php"><i class="fas fa-heart"></i></a>
                            <p>Family Development Department</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="community.php"><i class="fas fa-globe"></i></a>
                            <p> Community Based Organization </p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="Tribal.php"><i class="fas fa-home"></i></a>
                            <p>Tribal Development Department</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="rehabilitation.php"><i class="fas fa-hands-helping "></i></a>
                            <p>Rehabilitatio of Differently Abled</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="agriculture.php"><i class="fas fa-seedling"></i></a>
                            <p>Agriculture Department</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="Micro.php"><i class="fas fa-piggy-bank"></i></a>
                            <p>Micro Enterprises Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     
   
   
    
 <!-- ################# Mission Vision Start Here #######################--->
 
  <br>
  <section class="events">
      <div class="container">
       
          <div class="row mission" >
              <div class="col-md-6 mv-det">
                <!-- <img src="assets/images/mission.jpg" alt=""> -->
                  <h2><center>Our Vision</center></h2>
                  <p class="text-justify"><center>Reach out to the un-reached  for the  Realization of a just society based on love and fraternity.</center></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/vision.jpg" alt="">
              </div>
          </div>
         
        </div>
      </div>
  </section> 
  <section class="events">
      <div class="container">
       
          
          <br><br>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/mission.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h2><center>Our Mission</center></h2>
                   <p class="text-justify"><center>To illuminate light into the lives of people, irrespective of caste and creed through an empowerment process inculcating strength based, right based and participatory approach.</center></p>
              </div>
          </div>
         <!-- <br><br>
          <div class="row mission">
            <div class="col-md-6 mv-det">
                <h2><center>Our Objectives</center></h2>
                <p class="text-justify"><center>
                    <ul class="nav-item">
                        <li class="nav-link ">To build up healthy and secure families for a value based and Harmonious  society</li>
                        <li class="nav-link">To strengthen Community Based Organizations to become effective development partners.</li>

                        <li class="nav-link">To promote Sustainable Agriculture for better livelihood.</li>
                        <li class="nav-link">To collaborate with Local Self Governments to strengthen the decentralization process for promoting good governance.</li>
                        <li class="nav-link">To keep up the identity and enhance the living conditions of the indigenous people.</li>
                        <li class="nav-link">To generate and share knowledge related to development sector.</li>

                         <li class="nav-link">To mobilize and manage resources for the effective functioning of the organization</li>
                        <li class="nav-link">To promote the mental, physical and social health of the differently abled.</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-6 mv-img" >
                <img class="mx-auto d-block" src="assets/images/objectives.jpg" alt="">
                
            </div> -->
        </div>
      </div>
  </section>   
   

    
     <!-- ################# Events Start Here#######################--->
     

    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Making Impact At</h2>
                <p>Every single contribution goes to a noble cause</p> 
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/Services/Family.jpeg" alt="logoImage">
                        <h4>Family Development</h4>
                        
                        <!-- <p class="raises"><span>Developed Home : 19</span> / 500 </p> -->
                        <p class="desic">Family Counseling Centre at AVARD aided by Central Social Welfare Board started functioning in the year 1986 onwards. AVARD Bhavan Family Counseling Centre [FCC] & Service ...</p>
                        <button class="btn btn-success btn-sm" ><a class="nav-link" style="color:white;" href="family_development.html">Read More</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/Services/Sarga.jpeg" alt="logoImage">
                        <h4>Rehabilitation of Differently Abled</h4>
                        <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                        <p class="desic">The rehabilitation program of the differently abled persons has been continued dynamically since 1991, intensely to promote self-dependency and organize programs for them. </p>
                        <button class="btn btn-success btn-sm"><a class="nav-link" style="color:white;" href="rehabilitation.html">Read More</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/Services/Community.jpg" alt="logoImage">
                        <h4>Department of Community Based Organization</h4>
                        
                        <p class="desic">The Community Based Organization aims for the integral development of the people through eleven registered Desams...</p>
                        <button class="btn btn-success btn-sm"><a class="nav-link" style="color:white;" href="community.html">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <!-- <div class="row session-title">
                   <h2>Objectives</h2>
                   <p class="text-justify">
                    Our organization is dedicated to the holistic mission of building a value-based and harmonious society through sustainable development. We prioritize the well-being of families as the foundation of strong communities while simultaneously strengthening community-based organizations to be effective development partners. Sustainability is a guiding principle, with a specific focus on sustainable agriculture to improve livelihoods and protect the environment. Collaborating with local self-governments promotes good governance and decentralization, ensuring community involvement in decision-making. We are committed to preserving the identities and improving the living conditions of indigenous communities, sharing knowledge, efficiently mobilizing resources, and advocating for inclusivity, particularly for differently-abled individuals. In these ways, we work tirelessly to create a society where values, harmony, and sustainable development flourish.
                   </p>
               </div> -->
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>38+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>25+</h3>
                        <span>MEMBERS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>100+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>100000+</h3>
                        <span>Served</span>
                    </div>
                </div>
            </div>

        </div>

    </div> 
         
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Upcoming Events</h2>
                <p>Great minds discuss ideas; average minds discuss events; small minds discuss people. ...</p> 
            </div>
            <div class="event-ro row">
                <?php
                    $result=mysqli_query($con,"SELECT * FROM event order by id desc limit 3");
                    while ($user_data=mysqli_fetch_array($result)) {                 
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="Admin/Files/Event/<?php echo $user_data['image'] ?>" alt="logoImage">
                        <!-- <h4>Training Program</h4> -->
                        
                        <!-- <p class="raises"><span>Developed Home : 19</span> / 500 </p> -->
                        <!-- <p class="desic">Family Counseling Centre at AVARD aided by Central Social Welfare Board started functioning in the year 1986 onwards. AVARD Bhavan Family Counseling Centre [FCC] & Service ...</p> -->
                        <!-- <button class="btn btn-success btn-sm" ><a class="nav-link" style="color:white;" href="family_development.html">Read More</a></button> -->
                    </div>
                </div>
            <?php } ?>
                
            </div>
        </div>
    </section>
          
    
    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Gratitude is a powerful catalyst for happiness. It’s the spark that lights a fire of joy in your soul.</p>
        		</div>
        		<div class="blog-row row">
                    <?php
                        $result=mysqli_query($con,"SELECT * FROM blog order by id desc limit 3");
                        while ($user_data=mysqli_fetch_array($result)) {                 
                    ?>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_01.jpg" alt="logoImage">
        					</figure>
        					<div class="blog-detail">
        						<small><?php echo $user_data['name'] ?> | <?php echo $user_data['date'] ?></small>
								<h4><?php echo $user_data['title'] ?></h4>
								<p><?php echo $user_data['description'] ?></p>
								<!-- <div class="link">
									<a href="" class="nav-link">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div> -->
        					</div>	
        				</div>
        			</div>
                    <?php } ?>
        			<!-- <div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_02.jpg" alt="logoImage" >
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="" class="nav-link">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_03.jpg" alt="logoImage">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="" class="nav-link">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div> -->
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