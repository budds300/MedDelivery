<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
include 'nav.php';
unset($_SESSION["cart"]);
?>


  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  




        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at MedDelivery'! The ordering process is now complete.</h2>

<?php 
  $sql="SELECT order_ID FROM  orders WHERE username='$username' ORDER BY order_date DESC ";
  $res=mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res, MYSQLI_BOTH);
  $number=$row['order_ID'];
  
?>

<h3 class="text-center"> <strong>Your Order Numbers:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>