<!doctype html>
<html lang="en">

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
  
                 
          
                  
 
   <!--  ************************* About Us Starts Here ************************** -->     
   
 <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>DROPPING CENTER</h2>
                <ul>
                    <li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-angle-double-right"></i> Contribute</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-angle-double-right"></i> Dropping</a></li>
                </ul>
            </div>
        </div>
    </div>
    
 <!-- ################# Mission Vision Start Here #######################--->
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  
                <h2>Dropping Centers</h2>
             <p class="text-justify">
                Droping Centers, conceived by AVARD, encourage philanthropy by rewarding individuals with points for their donations, especially in the face of disasters or catastrophes. These centers have proven instrumental in channeling support during critical times, notably during the 2018 Kerala Flood and the COVID-19 pandemic. They serve as vital hubs for swiftly mobilizing resources and relief efforts, showcasing the power of collective giving and community resilience.
             </p>

              
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/AboutGal/22.jpg" alt="">
                  <br>
                  <p><center>Dropping Center For Covid 2018  </center></p>
              </div>
          </div>
          <div class="row vision">
            <div class="col-md-6 mv-img">
                 <img src="assets/images/AboutGal/21.jpg" alt="">
                 <br>
                 <p><center> Collection Camp During 2018  </center></p>
            </div>
            <div class="col-md-6 mv-det">
                <h2>Collection Camp</h2>
                <p class="text-justify">
                    <br/>
                    Collection Camps, another innovative concept by AVARD, complement Droping Centers by serving as sorting and distribution hubs for the items received. These camps play a crucial role as coordination centers, streamlining activities related to disaster relief and charitable initiatives, ensuring that donated goods and resources are efficiently organized and distributed to those in need. Together, Droping Centers and Collection Camps exemplify AVARD's comprehensive approach to effective philanthropy and disaster response.
                </p>
            </div>
        </div>
          
          </div>
          
      </div>
  </section>   

  <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Dropping Centers - Live Now</h2>
                <br/>
                <div>
                    <p>
                        
                    </p>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Location & Place</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Name of Person in Charge</th>
                        <th scope="col">Contact Number</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                          
                             $result=mysqli_query($con,"SELECT * FROM droping_center order by id desc limit 5  ");
                             $i=0; 
                                
                            while ($user_data=mysqli_fetch_array($result))
                             {  
                             $i++                
                        ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $user_data['position'] ?></td>
                        <td><?php echo $user_data['address'] ?></td>
                        <td><?php echo $user_data['name'] ?></td>
                        <td><?php echo $user_data['contact'] ?></td>
                      </tr>
                  <?php } ?>
                      
                     
                    </tbody>
                  </table>

                  
                  
            </div>

        </div>
    </section>   
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Collection Camp - Live Now</h2>
                <br/>
                <div>
                    <p>
                        
                    </p>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Location & Place</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Name of Person in Charge</th>
                        <th scope="col">Contact Number</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <th scope="row">1</th>
                        <td>Irinjalakuda</td>
                        <td>Avard Bhavan, Chalakudy, Thrissur - 680307</td>
                        <td>Avard Bhavan </td>
                        <td>91 8547807990</td>
                      </tr>
                     
                    </tbody>
                  </table>

                  
                  
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