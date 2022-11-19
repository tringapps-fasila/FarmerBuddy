<?php

include './includes/alert.php';
include './includes/dbconfig.php';

if (isset($_GET["mssg"])) {
    $value = array();
    array_push($value, $_GET["mssg"]);
    display_success($value);
}
if(isset($_GET['delete'])){ 
    $id = $_GET['delete']; 
    mysqli_query($conn,"DELETE FROM products where plot_id = $id "); 
    header('location:viewproduct.php'); 
}; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boostrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/design.css" rel="stylesheet">

        <link rel="stylesheet" href="./css/log.css" />
 <title>View Product</title>
</head>
<body style="background-image: url('./images/agriland.jpg');">
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
 <?php
 $select = mysqli_query($conn, "select * from products"); 
 ?>
 <div class = "display-container">
 <div class="display">
 <table class="table table-dark table-hover table-bordered border-primary mt-5" id="product">
 <thead>
    <tr>
      <th scope="col">Plot Number</th>
      <th scope="col">Plot Area</th>
      <th scope="col">Location</th>
      <th scope="col">Soil Type</th>
      <th scope="col">Amount Per Sq.ft</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

 <?php
 if(mysqli_num_rows($select)>0){
 while ($row = mysqli_fetch_assoc($select)) { 
   ?>
 <tr>
 
 <td><?php echo $row['plotnumber']; ?></td>
 <td><?php echo $row['area']; ?></td>
 <td><?php echo $row['Location']; ?></td>
 <td><?php echo $row['Soiltype']; ?></td>
 <td><?php echo $row['Amount']; ?></td>
 <td><?php echo $row['description']; ?></td>
 <td>
 <?php
 $location = 'sellerUpdate.php?edit=' . $row['plot_id']; 
 ?>
 <a href=<?php echo ($location); ?> class='btnEdit'>
 <i class="fas fa-edit"></i> edit</a><br><br>
 <a href="viewproduct.php?delete=<?php echo $row['plot_id']; ?> "
class='btnDelete'><i class="fas fa-trash"></i> delete</a>
 </td>
 </tr>
 <?php }}
 else{?>
     <tr><td colspan = "6">No Products are added </td></tr>
 <?php } ?>
 </table>
 </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>