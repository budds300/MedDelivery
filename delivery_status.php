<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}
include 'nav.php';
?>

<!-- <style>
    textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
</style> -->
  
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
        <a href="view_order_details.php" class="list-group-item  btn-primary ">View Order Details</a>
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
if(isset($_GET['update'])){
    $order_id=$_GET['update'];

$sql1 = "SELECT S_ID FROM stores WHERE M_ID='$user_check' ORDER BY S_ID";
$result1 = mysqli_query($conn, $sql1);
$R_IDrs = mysqli_fetch_array($result1, MYSQLI_BOTH);
$R_ID = $R_IDrs['S_ID'];

if(isset($_SESSION['empty'])){
  echo $_SESSION['empty'];
  unset( $_SESSION['empty']);
  
}
?>

<!-- <div class="col-xs-10"> -->
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="status_update.php" method="POST" enctype="multipart/form-data">
        <br style="clear: both">
        

          <div class="form-group">
            <input type="hidden" class="form-control" id="name" name="id" placeholder="" required="" value="<?php $order_id;?>">
          </div>     

          <div class="form-group">
            <textarea class="form-control" name="description" id="" cols="30" rows="10" value=></textarea>
          </div>

          <div class="form-floating">
          <select class="form-select" name="status" id="">
            <option value=""></option>
            <option value="Pending">Pending</option>
            <option value="Ordered">Ordered</option>
            <option  value="On Delivery">On Delivery</option>
            <option value="Delivered">Delivered</option>
            <optiion value="Canceled">Canceled</optiion>
          </select>
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> UPDATE MEDICINE ORDER STATUS </button>    
      </div>
        </form>

        
        </div>
      
   
</div>
  
  <?php 
  if(isset($_POST['submit'])){
    
//   $order_id = $conn->real_escape_string($_POST['id']);
  $status = $_POST['status'];
  $description = $_POST['description'];
  $date= date('d/m/Y H:i:s');

  
  // Storing Session
  $user_check=$_SESSION['login_user1'];
$R_IDsql = "SELECT STORES.S_ID FROM STORES WHERE STORES.M_ID='$user_check'";
$R_IDresult = mysqli_query($conn,$R_IDsql);
$R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
$R_ID = $R_IDrs['S_ID'];

if(empty($status)|| empty($description) ){
  echo'<script>alert("Fill in all fields")</script>';
  echo "<script>window.location='delivery_status.php?update='".$order_id."'</script>";
}
else{

  
  $query = "INSERT INTO track(order_id,description,date,status) VALUES('" . $order_id  . "','" . $description . "','" . $date ."','" . $status . "') ";
  $success = $conn->query($query);
  echo '<script>window.location="view_order_details.php"</script>';
}
}} ?>
  </table>
    <br>


  </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
  
  </body>
</html>