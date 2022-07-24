<?php

session_start();
include_once 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user3'])){
    header("location: doctorlogin.php"); 
    }
$outgoing_id =$conn->real_escape_string($_POST['outgoing_id']);
$incoming_id =$conn->real_escape_string($_POST['incoming_id']);
$message =$conn->real_escape_string($_POST['message']);
if(!empty($message)){
    $sql=$conn->query("INSERT into message  (incoming_id,outgoing_id,message) values ('$incoming_id','$outgoing_id','$message')") or die();


}