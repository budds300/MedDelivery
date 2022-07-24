<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2']) || !isset($_SESSION['cart'])){
header("location: customerlogin.php"); 
}
include 'nav.php';
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

$D_ID = $values["meds_id"];
$medsname = $values["meds_name"];
$quantity = $values["meds_quantity"];
$price =  $values["meds_price"];
$total = ($values["meds_quantity"] * $values["meds_price"]);
$S_ID = $values["R_ID"];
$username = $_SESSION["login_user2"];
$order_date = date('Y-m-d');


$gtotal = $gtotal + $total;
  }
?>




<div class="container">
    <div class="row">
        <div class="jumbotron mt-5" >
          <h1 class="text-center">Mpesa Express Payment</h1>
          <p class="text-center">Enter your payment details below.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 pt-5 col-md-offset-3">

            <div class="credit-card-div">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">
                            <form action="" class=""method="POST">
                                
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-muted">Enter Payment Details</h5>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Price: </label>
                                <input type="number" class="form-control text-muted" name="amount" disabled  id="disabledTextInput" placeholder="" value="<?php echo $gtotal;?>" required="" />
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Phone: </label>
                                <input type="number" class="form-control" name="phone-number" placeholder="07123456" required="" />
                            </div>
                            <!-- <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div> -->
                        
                        
                        <!-- <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font"> Expiry Month</span>
                                <input type="text" class="form-control" placeholder="MM" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  Expiry Year</span>
                                <input type="text" class="form-control" placeholder="YY" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  CCV</span>
                                <input type="text" class="form-control" placeholder="CCV" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3"><br>
                                <img src="images/creditcard.png" class="img-rounded" required="" />
                            </div>
                        </div> -->
                       
                        <div class="row ">
                            <!-- <div class="col-md-12 pad-adjust">

                                <input type="text" class="form-control" placeholder="Name On The Card" required="" />
                            </div> -->
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 pad-adjust">
                                <div class="checkbox">
                                    <label>
                                        <!-- <input type="checkbox" checked class="text-muted" required=""> Save details for fast payments. <a href="#">Learn More</a> -->
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                             <a href="payment.php"><input type="submit" class="btn btn-danger btn-block" value="CANCEL" required="" /></a>   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                <input type="submit" name="submit" class="btn btn-success btn-block" value="PAY NOW" required="" />  
                                
                                

                            </div>
                        </div>
                            </form>
                        </div>
</form>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="col-md-3"></div>
    </div>
</div>



<?php 
if(isset($_POST['submit'])){

    $amount = '100'; //Amount to transact 
    $phonenumber = $_POST['phone-number']; // Phone number paying
    
    $Account_no = '123456'; // Enter account number optional
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenumber,
        'account_no'=>$Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey: J1l8piPmb0i' // Replace with your api key
     );
    $info = http_build_query($data);
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    $msg_resp = json_decode($resp);
    
    
    if ($msg_resp ->success == 'true') {
        echo'<script>alert("WAIT FOR  STK POP UP🔥")</script>';
        echo '<script>window.location="COD.php"</script>';
        // echo "WAIT FOR  STK POP UP🔥";
      } else {
        echo "Transaction Failed";
       
      }
}

include 'footer.php';?>