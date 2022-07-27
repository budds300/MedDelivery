<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
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
        <div class="carousel-item active"style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0, 0, 0, 0.4)),url('https://images.unsplash.com/photo-1579165466949-3180a3d056d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80');height:80vh;background-size:cover;background-position:top;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Welcome to MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.</h5>
          <h5 class="text-white text-center"> Scroll down to make your order.</h5>
        </div>
        
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0, 0, 0, 0.3)),url('https://images.unsplash.com/photo-1632054229892-21103035a686?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');height:85vh;background-size:cover;background-position:top;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Welcome to MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.</h5>
          <h5 class="text-white text-center"> Scroll down to make your order.</h5>
       </div>
        <!-- <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('./images/national-cancer-institute-701-FJcjLAQ-unsplash.jpg');height:85vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Welcome to MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.</h5>
          <h5 class="text-white text-center"> Scroll down to make your order.</h5>
       </div>
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('https://images.unsplash.com/photo-1617881770125-6fb0d039ecde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=85');height:85vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Welcome to MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.</h5>
          <h5 class="text-white text-center"> Scroll down to make your order.</h5>
       </div> -->
        <div class="carousel-item "style="background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0, 0, 0, 0.35)),url('https://images.unsplash.com/photo-1609188076864-c35269136b09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');height:85vh;background-size:cover;background-position:center;background-repeat:no-repeat;" height="">
        <h1 class="text-white text-center" style="padding-top: 300px;"> Welcome to MedDelivery system</h1>
          <h5 class="text-white text-center"> A service dedicated to serve our Clients needs.</h5>
          <h5 class="text-white text-center"> Scroll down to make your order.</h5>
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
<div class="container">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM drugs WHERE options = 'ENABLE'  ORDER BY D_ID DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
    echo "<div class='row '>";
    $image_name=$row['images_path'];

?>
<div class="col-md-4  " data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">

<div class="card mt-4"style="">
  <form method="post" action="cart.php?action=add&id=<?php echo $row["D_ID"]; ?>">
  <div class="row" align="center";>
    
      <div class="col-md-4">
            <?php if($image_name == ""){
            echo '<div class="error">Image not available</div>';
        } else{?>
        <img src="./images/meds_item/<?php echo $image_name ?>" class=" rounded-start img-fluid " >
    </div>
        <?php
    }?>
      
        <!-- if image is available or not -->
    <!-- display details from db -->
    <div class="col-md-8">
    <h4 class="card-title"><?php echo $row["name"]; ?></h4>
        <h5 class="card-text">KES <?php echo $row["price"]; ?>/-</h5>
        <h5 class="card-text"><?php echo $row["description"]; ?></h5>
        <h5 class="card-text">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
        <br>
        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        <input type="hidden" name="hidden_RID" value="<?php echo $row["S_ID"]; ?>">
        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart">
        </div>
        </div>
        <?php
            
        
    
  
    ?>

</form>
</div>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No Medicine is available.</h1> </label>
        <p>Stay Safe...! 😊</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Chats</h5> <hr>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <div class="search ">
            <div class="row">
                <div class="col-md-10 col-10">
                  <span>Select a user to start chats</span>
                    <input type="text" class="active" name="user" id="search" placeholder="Search for Users" >
                </div>
                <div class="col-md-2 col-2 pt-3">
                    <button id="button" class="btn btn-dark active" ><i class="bi bi-search"></i></button>
                </div>
            </div>
            <hr>
        </div> -->
        <div class="users-list" id="users-list">
       
         </div>
       
        
      </div>
      <div class="modal-fooer">
       
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary rounded-circle" style="position: fixed; bottom: 4rem;  right: 1rem; font-size:larger;" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-chat-dots"></i></a>
 <script src="js/customer.js"></script>
<script src="js/script.js"></script>
<?php include 'footer.php';?>