<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}
require "./nav.php";
?>
<!-- <style>
  
input[type=text], select,input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}




</style> -->
<div class="container">
  <?php
  if( isset($_SESSION['complete'])){
    echo $_SESSION['complete'];
    unset($_SESSION['complete']);
  }
  ?>
  <div class="row">
    <div class="col-md-2 col-lg-2 mt-5 pt-5">
    <button class="btn btn-primary ms-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-list" style="font-size:larger"></i></button>
    </div>
    <div class="col-md-10 col-lg-10 jumbotron mt-5 pt-5">
     <h1>Hello Manager! </h1>
     <p>Manage all your Stores from here</p>

    </div>
  </div>
    </div>
<div class="container">
    <div class="col-xs-3  pt-5 mt-5" style="text-align: center;">
     <div class="offcanvas offcanvas-start " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-center" id="offcanvasWithBothOptionsLabel">Welcome to MedDelivery System.</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-flush pt-5">
        <a href="mystore.php" class="list-group-item active btn-primary ">My Store</a>
        <a href="view_meds_items.php" class="list-group-item btn-primary ">View Medicine Items</a>
        <a href="add_meds_items.php" class="list-group-item btn-primary ">Add Medicine Items</a>
        <a href="edit_meds_items.php" class="list-group-item btn-primary ">Edit Medicine Items</a>
        <a href="delete_meds_items.php" class="list-group-item btn-primary ">Delete Medicine Items</a>
        <a href="view_order_details.php" class="list-group-item btn-primary ">View Order Details</a>
      </div>
    </div>
</div>
    
    </div>

      <div class="col-xs-9">
        <div class="form-area" style="padding: 0px 100px 100px 100px;">
          <form action="mystore1.php" method="POST">
          <br style="clear: both">
            <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> MY STORE</h3>
  
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Stores's Name" required="">
            </div>
  
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Stores's Email" required="">
            </div>     
  
            <div class="form-group">
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Stores's Contact Number" required="">
            </div>
  
            <div class="form-group">
              <input type="text" class="form-control" id="address" name="address" placeholder="Your Stores's Address" required="">
            </div>
  
            <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD STORE </button>    
        </div>
          </form>

    </div>
    


    

        
        </div>
      
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
<script src="./js/script.js"></script>
<?php include 'footer.php';?>