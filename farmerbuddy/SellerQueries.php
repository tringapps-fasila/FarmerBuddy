<?php 
 include './includes/dbconfig.php'; 
 session_start(); 
$user_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Query</title>
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/boostrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/design.css" rel="stylesheet">

<link rel="stylesheet" href="./css/log.css" />
</head>
<body style="background-image: url('./images/agriland.jpg');">

 <?php
 $select = mysqli_query($conn,"select * from contact_admin"); 
 $selects="select * from users where id=$user_id";
 $results = mysqli_query($conn, $selects);
 if (mysqli_num_rows($results) > 0) {
                 while ($row = mysqli_fetch_array($results)) {
                     $Mobile=$row['Mobile'];
                 }
 }
 ?>
 <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" id="home">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farmer</span>Buddy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="seller.php" class="nav-item nav-link active">Home</a>
                <a href="UsersProfile.php" class="nav-item nav-link active">Profile</a>
                <a href="plot.php" class="nav-item nav-link active">Add Plots</a>
                <a href="viewproduct.php" class="nav-item nav-link active">View Plots</a>
                <a href="SellerOrder.php" class="nav-item nav-link active">Orders</a>
                <a href="SellerQueries.php" class="nav-item nav-link active">Query</a>
                <a href="Login.php" class="nav-item nav-link active">Logout</a>
              
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
 <div class="query-container">
     <div class = "display">
     <table class="table table-dark table-hover table-bordered border-primary mt-5" id="product">
 <thead>
    <tr>
      
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>

 <?php
 if(mysqli_num_rows($select)>0){
 while ($row = mysqli_fetch_assoc($select)) { 
    if($Mobile== $row['ToNum'])
    {
    
   ?>
 <tr>
 
 <td><?php echo $row['Email']; ?></td>
 <td><?php echo $row['Message']; ?></td>
 <td><?php echo $row['Mobile']; ?></td>

 </td>
 </tr>
 <?php }}}
 else if(mysqli_num_rows($select)<0){?>
     <tr><td colspan = "6">No  Queries </td></tr>
 <?php } ?>
 
 
 </table>
 </div>
 </div>
</body>
</html>