    <?php
include('login_m.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: mystore.php"); //Redirecting to myrestaurant Page
}
include 'nav.php'
?>

<!-- <style>
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

.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;
  
}

footer{
  display: block;

}

/*for Heading name " drugs Exploria" */
.edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}
input[type=text], select,input[type=email],input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style> -->

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <div class="container">
    <div class="jumbotron mt-5">
     <h1>Hi Manager,<br> Welcome to <span class="edit"> Meds Delivery' </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>
   
    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
    <div class="row">
      <div class="col-md-3"></div>

      
      <div class="col-md-6 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
              
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>

          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="managersignup.php" class="text-primary">Create a new account.</a></label>
       

        </form>

        </div>
        
      </div>
      
    </div>
      <div class="col-md-3"></div>
    </div>
    </div>
  
    <?php include 'footer.php'?>