<?php
session_start();
include 'nav.php';
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
        <div class="carousel-item active"style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/anton-8q-U8X1zkvI-unsplash.jpg');height:95vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medications</h1>
        
        
       </div>
        
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/jacqueline-munguia-1pAwJiCD60c-unsplash.jpg');height:95vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medicine</h1>
        
        </div>
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/national-cancer-institute-701-FJcjLAQ-unsplash.jpg');height:95vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medications</h1>
        
       
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
    <div class=" container orderblock mt-5">
    <h2>Feeling Like Unwell? Well say less</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Your Medication Now </a></center>
    </div>

   <script src="js/script.js"></script> 
   <?php include 'footer.php';?>