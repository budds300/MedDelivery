<?php
session_start();
include 'nav.php'
?>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-offset="500">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active"style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/anton-8q-U8X1zkvI-unsplash.jpg');height:100vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> About the MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></h5>
          <div class="tagline" style="color:white;">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div>
          <h3 style="color: white; text-align:center;">Order Medication from stores near & around you and they get delivered to your door step. <h3 style="color: white"></h3>
        </div>
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/jacqueline-munguia-1pAwJiCD60c-unsplash.jpg');height:100vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> About the MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></h5>
          <div class="tagline" style="color:white;">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div>
          <h3 style="color: white; text-align:center;">Order Medication from stores near & around you and they get delivered to your door step. <h3 style="color: white"></h3>
        </div>
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0, 0, 0, 0.8)),url('./images/owen-beard-DK8jXx1B-1c-unsplash.jpg');height:100vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> About the MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></h5>
          <div class="tagline" style="color:white;">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div>
          <h3 style="color: white; text-align:center;">Order Medication from stores near & around you and they get delivered to your door step. <h3 style="color: white"></h3>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    

      <script src="js/script.js"></script>
<?php include 'footer.php';?>