    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: medslist.php"); 
}
include 'nav.php'
?>

<!-- <style>
  .edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}
</style> -->


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

   

    

    <div class="container">
    <div class="jumbotron mt-5">
     <h1>Hi Guest,<br> Welcome to <span class="edit"> MedDelivery' </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" >
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-md-offset-4 pt-5">
          <label style="margin-left: 5px;color: red;"><span> <?php echo $error, $password;  ?> </span></label>
        <div class="panel panel-primary">
          <div class="panel-heading"> Login </div>
          <div class="panel-body">
            
          <form action="" method="POST" >
            
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
          <br>
          <p>Or</p>
          <a href="customersignup.php" class="text-primary">Create a new account.</a></label>
  
          </form>
          </div> 
              
        </div>
        
        
        
      </div>

        <div class="col-md-3"></div>
      </div>
    </div>

   <script src="js/script.js"></script>
<?php include "footer.php"?>