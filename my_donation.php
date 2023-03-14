<?php
include_once('connection_ngo.php');



$query = "SELECT * FROM users WHERE email='niteshjaiswal9292@gmail.com'" ;
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Donation</title>
     <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://example.com/fontawesome/v6.2.0/js/all.js" ></script>
  

<!-- google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

 
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;700;900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
 
  <!-- bootstrap Script -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  <!-- css stylesheet -->
  
  <link rel="stylesheet" href="ngo_page.css">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
 $(document).ready(function()
        {
            $(".accept").click(function()
            {
                alert("Donation request is accepted");

            })
        })

        $(document).ready(function()
        {
            $(".decline").click(function()
            {
                alert("Donation request is rejected");

            })
        })       

</script>


</head>
<body>
    <!-- <section id="title">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="ngo_home.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnLdL9soBetW8PzV4u97lugAc_7raiDIENqg&usqp=CAU" alt="" class="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Status</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://forms.gle/n8r1pan9qWnqzvTK6">Contact us</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </nav>
    </section> -->



      <h2 style="text-align: center">MY Donation</h2>

    <table  style = " text-align: center; width: 600px; line-heiight:400px;" >
      
      <tr >
        <th>ID</th></th>
        <th>Donor's Name</th>
        <th>Email</th>
        <th>Type of food</th>
        <th>serves</th>
        <th>Date of Cooking</th>
        <th>Time of Cooking</th>
        <th>Address</th>
        <th>Pincode</th>
        
      </tr>
      <?php   while($rows = mysqli_fetch_assoc($result))
      {
        ?>
       
        <tr>
          <td><?php echo $rows['id'];?></td>
          <td><?php echo $rows['name'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['food'];?></td>
          <td><?php echo $rows['serves'];?></td>
          <td><?php echo $rows['cooked_date'];?></td>
          <td><?php echo $rows['cooked_time'];?></td>
          <td><?php echo $rows['address'];?></td>
          <td><?php echo $rows['pincode'];?></td>
          
        </tr>
           <?php 
      }
      ?>
      
    </table>

   
  
</body>
</html>