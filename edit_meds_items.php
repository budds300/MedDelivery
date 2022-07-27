<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 

}
require './nav.php';
?>

<!-- <style>
  .form-area {
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 50px 50px 60px;
  border: 1px solid GREY;
  opacity:0.9;
}
.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}
.black{
  color: black;
}
</style> -->



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
        <a href="view_meds_items.php" class="list-group-item btn-primary ">View Medicine Items</a>
        <a href="add_meds_items.php" class="list-group-item btn-primary ">Add Medicine Items</a>
        <a href="edit_meds_items.php" class="list-group-item active btn-primary ">Edit Medicine Items</a>
        <a href="delete_meds_items.php" class="list-group-item btn-primary ">Delete Medicine Items</a>
        <a href="view_order_details.php" class="list-group-item btn-primary ">View Order Details</a>
      </div>
    </div>
</div>
    
    </div>


    
    
<div class="row">
<div class="col-xs-3 col-md-3">

  <div class="form-area" style="padding: 10px 10px 110px 10px; ">
  
    <div class="" style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    $description = $_GET['ddescription'];


    $query = mysqli_query($conn, "UPDATE drugs set
    name='$name', price='$price',
    description='$description' where D_ID='$F_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM drugs d WHERE d.options = 'ENABLE' AND d.S_ID IN (SELECT s.S_ID FROM stores s WHERE s.M_ID='$user_check') ORDER BY D_ID ");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group-update" style="text-align: center;color:black;">
        <?php
      echo "<b ><a style='color:black' href='edit_meds_items.php?update={$row['D_ID']}'>{$row['name']}</a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM drugs WHERE D_ID=$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>




<div class="col-md-6 offset-md-3">

 <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="edit_meds_items.php" method="GET">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT YOUR MEDICINE ITEMS HERE </h3>

          <div class="form-group">
            <input class='input' type='hidden' name="dfid" value=<?php echo $row1['D_ID'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Medicine Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['name'];  ?> placeholder="Your MedicinE name" required="">
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Medicine Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Medicine Price (KES)" required="">
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Medicine Description: </label>
            <input type="text" class="form-control" id="ddescription" name="ddescription" value=<?php echo $row1['description'];  ?> placeholder="Your Medicine Description" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
      </div>
        </form>
    <?php
}
}
  ?>   
  </div>
</div>
</div>


<?php
mysqli_close($conn);
?>
</div>
</div>
<?php include 'footer.php';?>