<?php

require("includes/common.php");
$email = $_POST['ngo_email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['ngo_password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);


// Query checks if the email and password are present in the database.
$query ="SELECT user_id, ngo_email ,name,house,colony,pin,contact FROM ngo WHERE ngo_email='" . $email . "' AND password = '" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
mysqli_close($con);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
    $error = "<span class='red'>Please enter correct E-mail and Password</span>";
    header("location: ngo_login.php?error=$error");
  } 
else
 {  
  $row = mysqli_fetch_array($result);  
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['Name'] = $row['name'];
  $_SESSION['email'] = $row['ngo_email'];
  $_SESSION['house'] = $row['house'];
  $_SESSION['colony'] = $row['colony'];
  $_SESSION['contact'] = $row['contact'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['pin'] = $row['pin'];
  echo "i am in else";
  header('location: search_food.php');
 }

?>
