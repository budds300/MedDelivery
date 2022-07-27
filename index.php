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
        <div class="carousel-item active"style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0, 0, 0, 0.4)),url('./images/anton-8q-U8X1zkvI-unsplash.jpg');height:80vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medicine</h1>
        </div>
        
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0, 0, 0, 0.3)),url('https://images.unsplash.com/photo-1632054229892-21103035a686?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');height:85vh;background-size:cover;background-position:top;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medicine</h1>
       </div>
      
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0, 0, 0, 0.35)),url('https://images.unsplash.com/photo-1609188076864-c35269136b09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');height:85vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Quality Medicine</h1>
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