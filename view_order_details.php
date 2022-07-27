<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}
include 'nav.php';
?>


  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
   




    <div class="container">
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
        <a href="mystore.php" class="list-group-item  btn-primary ">My Store</a>
        <a href="view_meds_items.php" class="list-group-item  btn-primary ">View Medicine Items</a>
        <a href="add_meds_items.php" class="list-group-item btn-primary ">Add Medicine Items</a>
        <a href="edit_meds_items.php" class="list-group-item btn-primary ">Edit Medicine Items</a>
        <a href="delete_meds_items.php" class="list-group-item btn-primary ">Delete Medicine Items</a>
        <a href="view_order_details.php" class="list-group-item active btn-primary ">View Order Details</a>
      </div>
    </div>
</div>
    
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> YOUR MEDICINE ITEMS LIST </h3>


<?php




// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM orders o WHERE o.S_ID IN (SELECT r.S_ID FROM stores r WHERE r.M_ID='$user_check') ORDER BY order_date";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table class="table  table-striped">
    <thead class="thead-dark">
      <tr>
        <th>  </th>
        <th> Order ID </th>
        <th> Medicine ID </th>
        <th> Order Date </th>
        <th> Medicine Name </th>
        <th> Price </th>
        <th> Quantity </th>
        <th> Customer </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["order_ID"]; ?></td>
      <td ><?php echo $row["D_ID"]; ?></td>
      <td class="ms-auto"><?php echo $row["order_date"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["username"]; ?></td>
      <td><a href="delivery_status.php?update=<?php echo $row["order_ID"];?>"<button class="btn btn-primary" style="padding: 6px 0   ;">Delivery Update</button></a></td>
      
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
  <script src="js/script.js"></script>
  <?php include 'footer.php';?>