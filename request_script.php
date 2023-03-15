<?php
require("includes/common.php");


if(isset($_POST['request']))
   {
    $ngo_email= $_SESSION['ngo_email'];
    $food_id = $_POST['food_id'];
    $food_image = $_POST['food_image'];
    $food_name = $_POST['food_name'];
    $ngo_contact = $_POST['ngo_contact'];
    $ngo_name = $_POST['ngo_name'];
    
    $donor_email = $_POST['donor_email'];
    $query1 = "INSERT INTO food_requests(food_id,image,food_name,ngo_name,ngo_contact,ngo_email,donor_email,status) 
    VALUES 
('" . $food_id . "','" . $food_image . "','" . $food_name . "','" . $ngo_name . "','" . $ngo_contact . "','" .$ngo_email . "','" .$donor_email . "','pending')";

mysqli_query($con, $query1) or die(mysqli_error($con));
header('location: request_sent.php');

    
   }



// $sql = "INSERT INTO food_requests (food_id,ngo_email,donor_email,status) VALUES ('" . $food_id . "','" . $ngo_mail . "','" . $donor_mail . "','pending')";
?>