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
  <div class="container pt-5 mt-5">

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Order Number</th>
<!-- <th width="10%">description</th> -->
<!-- <th width="15%">Updated Date</th> -->
<th width="20%">Item</th>
<th width="15%">Date</th>
<th width="15%">Quantity</th>
<th width="15%"> price</th>

</tr>
</thead>
<?php
$user_check=$_SESSION['login_user2'];

$sql="SELECT * from orders  where username='$user_check' ORDER BY order_ID DESC";
// $sql="SELECT * from track t where t.order_Id in (select order_ID from orders where username='$user_check') ORDER BY order_Id DESC";
$result=mysqli_query($conn,$sql);
if($count=mysqli_fetch_row($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $order_number=$row['order_ID'];
        $name=$row['name'];
        $price=$row['price'];
        $date=$row['order_date'];
        $quantity=$row['quantity'];
        // $status=$row['status'];
?>
        <tr>
<td><?php echo $order_number; ?></td>
<td><?php echo $name ?></td>
<td> <?php echo $date ?></td>
<td> <?php echo $quantity; ?></td>
<td> KES <?php echo $price; ?> </td>
<td> <a href="tracking.php?id=<?php echo $order_number?>" class="btn btn-primary" style="padding: 5px;"> Track </a> </td>
</tr>
<?php
    }
}
?>
<?php 
?>
<tr>
<td></td>
</tr>
</table>
<?php
  echo '<a href="medslist.php"><button class="btn btn-warning">Continue Shopping</button></a>';
?>
</div>
  </div>
<br><br><br><br><br><br><br>
<?php
?>
<script src="js/script.js"></script>
<?php include 'footer.php'?>