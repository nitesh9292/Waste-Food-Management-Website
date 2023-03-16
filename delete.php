<?php
require("includes/common.php");

// If the delete button is clicked


$id = $_GET['id'];

$deletequery1 = "delete from uploads  where id = $id";
$deletequery2 = "delete from food_requests  where food_id = $id";

$query1 = mysqli_query($con, $deletequery1);
$query2 = mysqli_query($con, $deletequery2);

header('location: notifications.php');

?>

