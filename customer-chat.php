<?php
session_start();
include_once 'connection.php';
$conn = Connect();
if(isset($_SESSION['login_user2'])){
   
$output="";
$outgoing=$_SESSION['login_user2'];
$sql="SELECT *FROM DOCTOR";
$you="";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)==0){
        $output .= "No user available";
    
}
elseif (mysqli_num_rows($res)>0){
    while($row =mysqli_fetch_assoc($res) ){
        $username=$row['username'];
        $sql2= "SELECT *from message where incoming_id='$username' OR outgoing_id='$username' AND outgoing_id='$outgoing' or incoming_id='$username' order by id desc limit 1";
        $res2=mysqli_query($conn,$sql2);
        
        $row2=mysqli_fetch_assoc($res2);
            if( mysqli_num_rows($res2)>0){
                $result=$row2['message'];
                ( $outgoing== $row2['outgoing_id'])?$you="You: ":$you="";
                
        }
        else {$result= "No message Available";}
        // Triming the message if its more than 28
        (strlen($result)>28)? $msg = substr($result,0,28): $msg =$result;
        
      
         
       
       
        $output .= '<a href="chat_customer.php?username='.$row['username'].'">
                    <div class="users text-dark mx-4" >
                        <h6>'.$row["fullname"].'</h6>
                        <p>'.$you . $msg .'</p>
                        <hr>
                        </div>
                        </a>';
    } 
}
    echo $output;
}
 else {
 header("location: customerlogin.php"); 

}