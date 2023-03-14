<?php
require("includes/common.php");
$lat = $_POST['lati'];
$long = $_POST['longi'];
$em = $_SESSION['ngo_email'];
$food_id = $_POST['food_id'];
$ngo_email = $_POST['ngo_email'];
$donor_email = $_POST['donor_email'];

$sql = "INSERT INTO food_requests (food_id,ngo_email,donor_email,status) VALUES ('" . $food_id . "','" . $ngo_mail . "','" . $donor_mail . "','pending')";
?>