<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
include 'nav.php';
?>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    

    


 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $D_ID = $values["meds_id"];
    $medsname = $values["meds_name"];
    $quantity = $values["meds_quantity"];
    $price =  $values["meds_price"];
    $total = ($values["meds_quantity"] * $values["meds_price"]);
    $S_ID = $values["R_ID"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');

    
    $gtotal = $gtotal + $total;

 


     $query = "INSERT INTO ORDERS (D_ID,status, name, price,  quantity, order_date, username, S_ID) 
              VALUES ('" . $D_ID . "', 'Pending','" . $medsname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $S_ID . "')";
             


              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container pt-5 mt-5">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div class="container mt-5">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: KES<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        
  

<br><br><br><br><br><br>
<script src="js/script.js"></script>
<?php include 'footer.php';?>