<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/sweetalert.js"></script>

<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
</script> -->


<?php
require("includes/common.php");

// check if the request button was clicked
if (isset($_POST['request'])) {
  // get the food ID, NGO email, and donor email from the form data
  $food_id = $_POST['food_id'];
  $ngo_email = $_POST['ngo_email'];
  $donor_email = $_POST['donor_email'];

  // insert the request into the database

  $query1 = "INSERT INTO food_requests(food_id,ngo_email,donor_email,status) 
	                                                                   VALUES 
		      ('" . $food_id . "','" .$ngo_email . "','" .$donor_email . "','pending')";
				 
    mysqli_query($con, $query1) or die(mysqli_error($con));
   
    $_SESSION['ngo_email'] = $ngo_email;	
	
   
    header('location: home.php');
}
?>
