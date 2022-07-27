<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
include 'nav.php'
?>


  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>



<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql= "SELECT * from track where order_Id='$id' ORDER BY date DESC";
  $res= mysqli_query($conn,$sql);
  if($count=mysqli_num_rows($res)>0){
  ?>
  <div class="container pt-5 mt-5">
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped" style="margin: 20px 0;">
  <thead class="thead-dark">
<tr>

<th width="10%">Description</th>
<th width="20%">Status</th>
<th width="15%">Updated Date</th>


</tr>
</thead>
<?php
$user_check=$_SESSION['login_user2'];



    while($row=mysqli_fetch_assoc($res)){
        $description=$row['description'];
        $status=$row['status'];
        $date=$row['date'];

    ?>
    <tr>
        <td> <?php echo $description;?> </td>
        <td> <?php echo $status;?> </td>
        <td> <?php echo $date;?> </td>
    </tr>

  </div>
    
    <?php
    }
  }

else{
  ?>
  <div class="jumbotron pt-5 mt-5"><h1>Your order Status has not been updated</h1></div>
  <?php
}
?>


<?php 


?>
<tr>


</tr>
</table>
<?php
}
  echo '<a  href="medslist.php"><button class="btn btn-warning" style="margin: 20px 0;"  >Continue Shopping</button></a>';
?>
</div>
<br><br><br><br><br><br><br>



<?php

?>

<script src="js/script.js"></script>
<?php include 'footer.php';?>