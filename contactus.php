<?php
session_start();
include 'nav.php';
?>

   

    <div class="jumbotron mt-5">
     <strong>Want to contact <span class="edit"> MedDelivery' </span>?</strong>
     <br>
    Here are a few ways to get in touch with us.
    </div>

    <div class="col-xs-12 line"> <br><hr></div>

    <div class="col-xs-12 line"><hr></div>

<div class="container" >
<div class="col-md-5" style="float: none; margin: 0 auto;">
  <div class="form-area">
    <form method="post" action="">
    <br style="clear: both">
      <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

      <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
      </div>

      <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>     

      <div class="form-group">
        <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
      </div>

      <div class="form-group">
       <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
       <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
      </div> 
      <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
    </form>

    
  </div>
</div>
  
</div>

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

<?php include 'footer.php';?>