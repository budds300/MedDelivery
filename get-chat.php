<?php

session_start();
include_once 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user3'])){
    header("location: doctorlogin.php"); 
    }
$outgoing_id =$conn->real_escape_string($_POST['outgoing_id']);
$incoming_id =$conn->real_escape_string($_POST['incoming_id']);
$output="";
$message =$conn->real_escape_string($_POST['message']);

    $sql=$conn->query("SELECT*FROM message LEFT JOIN customer ON customer.username=message.incoming_id  WHERE incoming_id='$incoming_id ' AND outgoing_id='$outgoing_id' OR incoming_id='$outgoing_id' AND outgoing_id='$incoming_id' order by id asc") or die();
    if($sql->num_rows>0){
        while($row=$sql->fetch_assoc()){
            if($row['outgoing_id'] === $outgoing_id ){ // if this is true, he is the sender
                $output='<div class="callout left float-end">'.$row['message'].'</div>';
            }
            else{ // He is the msg reciver
                $output='<div class="callout right bg-white text-dark border-light">'.$row['message'].'</div>';
            }
            echo $output;
        }
    }

