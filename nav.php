<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedDelivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-12 col-xs-12 col-sm-12">
        <section id="navbar">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand text-white " href="index.php">MedDelivery</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-dark" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['login_user1'])){

?>
                  <li class="nav-item me-5">
                    <a class="nav-link" href="#"> Welcome <?php echo $_SESSION['login_user1']; ?></a>
                  </li>
                  <li class="nav-item me-5"><a class="nav-link" href="mystore.php">MANAGER CONTROL PANEL</a></li>
                  <li class="nav-item me-5"><a class="nav-link"  href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
                  <?php
                    }
                    else if (isset($_SESSION['login_user2'])) {
                      $username= $_SESSION['login_user2'];
                        ?>
                        <li class="nav-item me-5" ><a class="nav-link"href="index.php">Home</a></li>
                        <li class="nav-item me-5"><a class="nav-link"href="aboutus.php">About</a></li>
                        <li class="nav-item me-5"><a class="nav-link"href="contactus.php">Contact Us</a></li>
                        <li class="nav-item me-5"><a class="nav-link"href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
                        <li class="nav-item me-5"><a class="nav-link"href="medslist.php"><span class=""></span> Medicine Zone </a></li>
                        <li class="nav-item me-5 position-relative"><a class="nav-link"href="cart.php"><i class="bi bi-cart-check-fill position-relative" style="color:white; font-size:20px">
                      </i> 
                      <?php
                if(isset($_SESSION["cart"])){
                  $count = count($_SESSION["cart"]); 
                 echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">';
                  echo "$count"; 
                  echo '<span class="visually-hidden">unread messages</span>';
              }
                else
               echo '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">';
               echo '<span class="visually-hidden">New alerts</span>';
              echo '</span>';
                ?>
                            
                          </span>
                    </a></li>
               <li class="nav-item me-5"><a class="nav-link" href="order_status.php"><span class="glyphicon glyphicon-log-out"></span>Status </a></li>
              <li class="nav-item me-5"><a class="nav-link" href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
              <?php } else if (isset($_SESSION['login_user3'])) {
                  $username= $_SESSION['login_user3'];
                    ?>
                    <li class="nav-item me-5" ><a class="nav-link"href="index.php">Home</a></li>
                    <li class="nav-item me-5"><a class="nav-link"href="aboutus.php">About</a></li>
                    <li class="nav-item me-5"><a class="nav-link"href="contactus.php">Contact Us</a></li>
                    <li class="nav-item me-5"><a class="nav-link"href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user3']; ?> </a></li>
                    <li class="nav-item me-5"><a class="nav-link"href="medslistDoctor.php"><span class=""></span> Medicine Zone </a></li>
                    <li class="nav-item me-5"><a class="nav-link"href="cart.php"><span class=""></span> <i class="bi bi-cart-check-fill"></i>
            (<?php
            if(isset($_SESSION["cart"])){
            $count = count($_SESSION["cart"]); 
            echo "$count"; 
          }
            else
              echo "0";
            ?>)
           </a></li>
           <li class="nav-item me-5"><a  class="nav-link" href="order_status.php">Status </a></li>
          <li class="nav-item me-5"><a class="nav-link"  href="logout_u.php"></span> Log Out </a></li>
<?php } else{

?>
               <li class="nav-item me-5">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
               <li class="nav-item me-5">
                    <a class="nav-link" href="aboutus.php">About</a>
                  </li>
               <li class="nav-item me-5">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                  </li>
               
              
              
            
          
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown me-5">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="customerlogin.php">Customer</a></li>
                            <li><a class="dropdown-item" href="doctorlogin.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="managerlogin.php">Admin/Manager</a></li>
                            
                          </ul>
                        </li>
                        </ul>

                    </div>
                
                <?php } ?>
                </ul>
                
              </div>
              

            </div>
          </nav>

        </section>
      </div>
    </div>
  </div>

