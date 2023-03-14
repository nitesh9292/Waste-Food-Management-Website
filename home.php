<?php
 
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
       $em=$_SESSION['email'];	   
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Food waste management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
     		body {
                      background-image: url("img/lifestylestore_bg.jpg");
                  } 
                  #custom-button {
  width:200px;
  padding: 10px;
  color: black;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 10px;
  cursor: pointer;

}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  font-family: sans-serif;
  color: #aaa;
}
        
        </style>	

    </head>

<body onload="getLocation()">
  <script type="text/javascript">  
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
       }
      
      function showPosition(position)
      {
       document.getElementById("latii").value=+position.coords.latitude;
       document.getElementById("longii").value=+position.coords.longitude;
      }
  </script>
  <?php include("includes/jscript.php"); ?>
  <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
        realFileBtn.click();
         });

        realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
        } else {
        customTxt.innerHTML = "No file chosen, yet.";
       }
      });
  </script>
  
        <?php
    //    include 'includes/header.php';
        ?>

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
                        <li><a href="my_donation.php" >My Donation</a></li>
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

  
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Easy Food Management!</h1>
                <p>If you have extra food with you and you dont want your food to get wasted, You are at the right place..!</p>

        </div>


            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                <form action="upload_script.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="lati" id="latii" />
                    <input type="hidden" name="longi" id="longii" />  

                    <div class="form-group">
                 
                   
                    <h4 style="color:red">Please Enter The Food Image : </h4>
                    <input type="file" id="custom-button"  name="image" required = "true" />
                    </div>

                    <div class="form-group">
                   
                    <h4 style="color:red">Cooked time : </h4>
                    <input type="datetime-local" id="cook-time" name="cookTime" style="border:solid 3px red; height:5remrem; width: 20rem" >
                    </div>

                    <div class="form-group">
                        <h4 style="color:red">Add Its Description :</h4>
                        <textarea style=" resize: none; color:black;"  name="description" rows="4" cols="30">
                        </textarea>      
                    </div>

                    <button type="submit" name="subm" id="subm" class="btn btn-primary">Upload</button><br><br>

              </form>
                </div>
            </div>

               
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
