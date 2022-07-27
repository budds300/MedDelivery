<?php
session_start();
include 'nav.php';
include_once 'connection.php';;
$conn = Connect();

if(!isset($_SESSION['login_user3'])){
header("location: doctorlogin.php"); 
}
$username= $conn->real_escape_string($_GET['username']);
$sql = $conn -> query("SELECT *FROM CUSTOMER WHERE USERNAME='$username'");
if($sql->num_rows>0){
    $row=$sql->fetch_assoc();
}
?>
<style>
    body{
        background-color:rgb(239, 239, 239) ;
    }
    div.callout {
	/* height: 60px; */
	width: 250px;
	float: left;
    
}

div.callout {
	background-color: #444;
	background-image: -moz-linear-gradient(top, #444, #444);
	position: relative;
	color: #ccc;
	padding: 10px;
	border-radius: 10px;
	box-shadow: 0px 0px 20px #999;
	margin: 25px;
	min-height: 50px;
	border: 1px solid #333;
	text-shadow: 0 0 1px #000;
	
	/*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

.callout::before {
	content: "";
	width: 0px;
	height: 0px;
	border: 0.8em solid transparent;
	position: absolute;
}

.callout.top::before {
	left: 45%;
	bottom: -20px;
	border-top: 10px solid #444;
}

.callout.bottom::before {
	left: 45%;
	top: -20px;
	border-bottom: 10px solid #444;
}

.callout.left::before {
	right: -20px;
	top: 40%;
	border-left: 10px solid #444;
}

.callout.right::before {
	left: -20px;
	top: 40%;
	border-right: 10px solid #444;
}

.callout.top-left::before {
	left: 7px;
	bottom: -20px;
	border-top: 10px solid #444;
}

.callout.top-right::before {
	right: 7px;
	bottom: -20px;
	border-top: 10px solid #444;
}
.chat-box{
    overflow-y: auto;
    overflow-x: hidden;
}
</style>
<section class="pt-3 mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <div class="card  py-5 rounded-5" style="border-radius:50px">
            <div class="row">
                <div class="col-md-1 offset-md-1">
                    <a href="medslistDoctor.php" class=" btn "><i class=" bi bi-arrow-left"></i></a>
                </div>
                <div class="col-md-8">
                    <h5 class="card-title text-center"> <?php echo $row['fullname']?></h5>
                </div>
            </div>
                <hr>
              <div class="card-body chat-box"style="height:60vh; ">
                
               
                
              </div>
              <div class="card-footer bg-white">
                  <form action="" autocomplete="off" class="typin-area" method="POST">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-10">
                        <input type="text" name="message" class="py-1 input-field" placeholder="Type a message">
                        <input type="hidden" class="py-1 input-field" name="outgoing_id" placeholder="" value="<?php echo $_SESSION['login_user3'];?>">
                        <input type="hidden" class="py-1 input-field" name="incoming_id" placeholder="" value="<?php echo $username?>">
                    </div>
                    <div class="col-md-2 col-2">
                        <button class="mt-2 btn btn-dark"><i class="bi bi-send"></i></button>
                    </div>
                </div>
            </form>
              </div>
              
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    
</section>
<script src="js/chat.js"></script>
<?php include 'footer.php';?>