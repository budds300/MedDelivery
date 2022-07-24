<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);


$query = "INSERT INTO STORES(name,email,contact,address,M_ID) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $address ."','" . $_SESSION['login_user1'] ."')";
$success = $conn->query($query);

if (!$success){
	?>

		
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
   

    
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Your already have one restaurant.</h1>
		<p>Go back to your <a href="view_meds_items.php">Meds</a></p>
	</div>
</div>
	
	</body>
	</html>

	<?php
}
else {
	header('Location: mystore.php');
}
session_start();
$_SESSION['complete']='<div class"alert alert-success mt-5 pt-5" role="alert">SUCCESSFULLY ADDED</div>';
$conn->close();


?>