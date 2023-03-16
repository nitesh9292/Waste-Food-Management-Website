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
					   <li><a href="notifications.php" ><i  class="fa-regular fa-bell"></i><span class="badge badge-danger" id="count">4</span> Notification </a></li>
                       <li><a href="home.php" >Welcome, <?php echo $_SESSION['email'];?> </a></li>
                        <li><a href="search_food.php" >Search Food</a></li>  
                        <li><a href="#" >Setting</a></li>
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
