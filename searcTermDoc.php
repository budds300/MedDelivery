<?php
session_start();
include_once 'connection.php';
$conn = Connect();
$output="";
$searchTerm = $conn ->real_escape_string($_POST['searchTerm']);
$sql = $conn-> query("SELECT *FROM CUSTOMER WHERE fullname LIKE '%$searchTerm%' OR username LIKE '%$searchTerm%'");
if($sql->num_rows>0){
    while($row =mysqli_fetch_assoc($res) ){
        $output .= '<a href="#">
                    <div class="users text-dark mx-4" >
                        <h6>'.$row["fullname"].'</h6>
                        <p>Text message here</p>
                        <hr>
                        </div>
                        </a>';
    } 
}
else{
    $output = "No user found related to your search term";
}