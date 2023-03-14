<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Food waste management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">


<script>
 $(document).ready(function()
        {
            $(".donor").click(function()
            {
                window.location.href='login.php';

            })
        })

        $(document).ready(function()
        {
            $(".ngo").click(function()
            {
                window.location.href='ngo_login.php';

            })
        })
     

          

</script>
</head>
<style>
    body{
       
    background-image: url("img/mybg4.jpg");
    width:100%;
    height:100%;
        text-align: center;
        background-color: #B4E4FF
    }

    button{
        
        margin-left:2rem;
    }
    
    div{
        /* margin-top: 5rem; */
    }

    h1{
        color:red;
        margin-bottom:2rem;
        font-weight:bold;
        font-family:sans-serif;
        font-size: 4rem;
    } 


</style>
<body>
<?php
        include 'includes/header.php';
        ?>
    <div class="container">
    <h1>Select your role</h1>
   <button type="submit" class=" donor btn btn-success btn-lg"><b>Donor</b></button>
   <button type="submit" class=" ngo btn  btn-primary btn-lg"><b>NGO</b></button>

    </div>

   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="css/script.js"></script>
<br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br>
    <?php
        include 'includes/footer.php';
        ?>
    <?php include("includes/jscript.php"); ?>
   
</body>
</html>