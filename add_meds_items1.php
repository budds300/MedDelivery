<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}


if(isset($_POST['submit'])){
  if(isset($_FILES['image']['name'])){
    // upload Image ony if selected
    $images_path=$_FILES['image']['name'];
    if($images_path !=""){
      
      // print_r($_FILES['image']);
    
    // To upload one needs image name,source path and destionation path
    // auto renaming images       
    // Get the extension of our image(jpg,png,gif,etc)e.g. "special foods.png
     $temp = explode('.',$images_path);
     $ext= end($temp);
    // rename the image
    $images_path="Medicine_item".rand(000,999).'.'.$ext;
    $source_path=$_FILES['image']['tmp_name'];
    $destination_path="./images/meds_item/".$images_path;
    $upload =move_uploaded_file($source_path,$destination_path);
    // check if uploaded image or not
        if($upload == false){
            $_SESSION['upload']= 'Failed to upload image';
            header("location: ./add_meds_items.php?error=FailedToUploadImage");
            die(); 
        }
  }
  }

  else{ 
    echo "nothing";
    $images_path="";}

  $name = $conn->real_escape_string($_POST['name']);
  $price = $conn->real_escape_string($_POST['price']);
  $description = $conn->real_escape_string($_POST['description']);
  
  // Storing Session
  $user_check=$_SESSION['login_user1'];
  $R_IDsql = "SELECT STORES.S_ID FROM STORES WHERE STORES.M_ID='$user_check'";
  $R_IDresult = mysqli_query($conn,$R_IDsql);
  $R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
  $R_ID = $R_IDrs['S_ID'];
  

  
  $query = "INSERT INTO DRUGS(name,price,description,S_ID,images_path) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $R_ID ."','" . $images_path . "')";
  $success = $conn->query($query);
}

if (!$success){

    include 'nav.php';
	?>

	


	<div class="container">
    <div class="jumbotron">
     <h1>Oops...!!! </h1>
     <p>Kindly enter your Store details before adding Medicine items.</p>
     <p><a href="mystore.php"> Click Me </a></p>

    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	
	</html>

	<?php
	
}
else {
	
  echo '<script>alert("Successfully added!")</script>';
  echo '<script>window.location="./add_meds_items.php?message=successfullyAdded"</script>';
	
}

$conn->close();


?>