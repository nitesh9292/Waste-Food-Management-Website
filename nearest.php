<?php
require("includes/common.php");
   if (!isset($_SESSION['email'])) {
       header('location: index.php');
      }
   $em=$_SESSION['email'];	   
?>

<!DOCTYPE html>
<html lang="en" >
<head>

               <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Easy Food Management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		<link href="css/table.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
   .body{
    background-image: url("img/mybg4.jpg");
    width:100%;
    height:100%;
   }
  
  </style>
 </head>
<body class="body">

  <?//php include("includes/header.php"); ?> 

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://example.com/fontawesome/v6.2.0/js/all.js" ></script>
  <style>
    #count{
        position:relative;
        top:-10px;
        left:-10px;
    }
  </style>
</head>
<body>
    
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
           
            <a class="navbar-brand" href="index.php">Waste Food Management</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
					   <li><a href="#" ><i  class="fa-regular fa-bell"></i><span class="badge badge-danger" id="count">4</span> Notification </a></li>
                       <li><a href="home.php" >Welcome, <?php echo $_SESSION['email'];?> </a></li>
                        <li><a href="search_food.php" >Search Food</a></li>  
                        <li><a href="received.php" >Received Food</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signupboth.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="signupboth.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
    
</body>
</html>


<div class="cd-hero">  
                <div class="cd-full-width">       
                    <div class="container">
                       <div class="col-md-11 ">
	                     <div class="col-md-5 col-md-offset-4">
                         <br>
                         <br>
                         <br>
                         <br>
                         <div>
                         <div>
                         <h3 style="color:white;"><center>Avaliable food near you</center></h3>
                        </div>
<?php

   $v1 = doubleval($_GET['lat']);
   $v2 = doubleval($_GET['long']);


//$sql = "SELECT id,(3959 * acos( cos( radians( $v1 )) * cos( radian( lat )) * cos( radians( lng ) - radians($v2)
  //      ) + sin(radians($v1)) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING diatnace < 55 ORDER BY distance LIMIT 0,60";

  $sql = "SELECT * from uploads ORDER BY cooked_time ";
  $res = mysqli_query($con, $sql);
  $row = mysqli_num_rows($res);

  ?>

<table class="rwd-table">
  <tr>
    <th><center>Food Image</center></th>
    <th><center>Date/Time</center></th>
    <th><center>Description</center></th>
    <th><center>Name</center></th>
    <th><center>Contact No</center></th>
    <th><center>Address</center></th>
    <th><center>Distance</center></th>
    <th><center>Action</center></th>
    
  </tr>


  <?php

  while ($row = mysqli_fetch_array($res)) {

      
            $l1 =  $row['lat'];
            $l2 =  $row['log']; 
           
              $call = circle_distance($v1,$v2,$l1,$l2);

           
             
         
           if( $call <= 5 )
           {           
              ?>
                         <tr>
                              <td data-th="Food Image" class="img-responsive">     <?php echo "<img width='200' height='200' src='uploaded images/".$row['image']."'  >"; ?>               </td>
                              <td data-th="Upload time">     <?php echo "<h7>".$row['cooked_time']."</h7>"; ?>    
                              <td  data-th="Description">    <?php echo "<h7>".$row['description']."</h7>"; ?>                             </td>
                              <td data-th="Name">            <?php echo "<h7>".$row['name']."</h7>"; ?>                                    </td>
                              <td data-th="Contact no">      <?php echo "<h7>".$row['contact']."</h7>"; ?>                                 </td>
                              <td  data-th="Address"> 
                                                            <?php echo  "<h7>house no : ".$row['house'].",</h7>";?> 
                                                            <?php echo  "<h7>  ".$row['colony'].",</h7>";?>
                                                            <?php echo  "<h7>pin : ".$row['pin'].".</h7>"; ?>                              </td>
                              <td style="border-bottom:double 2px black;" data-th="Distance" >  <?php echo round($call,2); ?> Kilometers   </td>
                              <!-- <td><center><button class="btn btn-primary request" data-food-id="<?php //echo $row['id']; ?>" data-donor-email="<?php// echo $row['email']; ?>">Request</button></center></td> -->
                              <td><center><button class="btn btn-primary request" data-food-id="<?php echo $row['id']; ?>" data-donor-email="<?php echo $row['email']; ?>">Request</button>
</center></td>
                            
                        </tr>
     
             <?php  
            }
        }
  
    function circle_distance($lat1, $lon1, $lat2, $lon2)
     {
        $rad = M_PI / 180;
        $distance =acos(sin($lat2*$rad) * sin($lat1*$rad) + cos($lat2*$rad) * cos($lat1*$rad) * cos($lon2*$rad - $lon1*$rad)) * 6371;// Kilometers
        // $km = $distance * 1.609344;
        return $distance; 
     }
       ?>
          </table>
          </div>
                   </div>
                 </div>
               </div>
            </div>
                </div>
            </div>                   
         </div>
               </li> 
             </ul>
  </body> 

<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="css/script.js"></script>

 <?php include("includes/footer.php"); ?>
    <?php include("includes/jscript.php"); ?>

<!-- <script>
   $(document).ready(function()
   {
      $('.btn').on('click',function()
      {
         $(this).closest("tr").remove();
      })
   });
</script> -->

<script>
$(document).ready(function() {
  $('.request').click(function() {
    $(this).closest('tr').remove();
    // get the food ID and donor email from the data attributes
    var food_id = $(this).data('food-id');
    var donor_email = $(this).data('donor-email');
    var ngo_email = $(this).data('ngo-email');
    console.log(food_id);
    console.log(donor_email);
    console.log(ngo_email);

    // send a notification to the donor
    var message = "Your food item with ID " + food_id + " has been requested by an NGO.";
    var subject = "Food Donation Request";
    var body = "Dear donor,\n\n" + message + "\n\nBest regards,\nThe Food Donation Team";
    var mailto_link = "mailto:" + donor_email + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
    window.location.href = mailto_link;

    // disable the button to prevent multiple requests
    $(this).prop('disabled', true);
  });
});
</script>


</body>
</html>