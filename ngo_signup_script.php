<?php

require("includes/common.php");


// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  
  $email = $_POST['ngo_email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $password = $_POST['ngo_password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $name = $_POST['ngo_name'];
  $name = mysqli_real_escape_string($con, $name);
  
  
  $house = $_POST['ngo_house'];
  $house = mysqli_real_escape_string($con, $house);
  
  $colony = $_POST['ngo_colony'];
  $colont = mysqli_real_escape_string($con, $colony);
  
  $pin = $_POST['ngo_pin'];
  $pin = mysqli_real_escape_string($con, $pin);
 
  $contact = $_POST['ngo_contact'];
  $contact = mysqli_real_escape_string($con, $contact);
  
  $whatsapp = $_POST['ngo_whatsapp'];
  $whatsapp = mysqli_real_escape_string($con, $whatsapp);
  
  

  
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

  

  $query = "SELECT * FROM ngo WHERE ngo_email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
    if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: note.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: note.php?m1=' . $m);
  } else {
   
    $query1 = "INSERT INTO ngo(ngo_email,password,name,house,colony,pin,contact,whatsapp) 
	                                                                   VALUES 
		      ('" . $email . "','" . $password . "','" . $name . "','" . $house . "','" . $colony . "'
			  ,'" . $pin . "','" . $contact . "','" . $whatsapp . "')";
				 
    mysqli_query($con, $query1) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['ngo_email'] = $email;	
	$_SESSION['Name'] = $name;
    $_SESSION['user_id'] = $user_id;
    header('location: search_food.php');
  }
?>