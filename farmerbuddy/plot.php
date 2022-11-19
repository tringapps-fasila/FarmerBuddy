<?php include './includes/dbconfig.php'; 
session_start(); 
$user_id = $_SESSION['id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/boostrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/log.css" />


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
                <a href="seller.php" class="nav-item nav-link">Home</a>
                <a href="UsersProfile.php" class="nav-item nav-link">Profile</a>
                <a href="plot.php" class="nav-item nav-link active">Add Plots</a>
                <a href="viewproduct.php" class="nav-item nav-link">View Plots</a>
                <a href="SellerOrder.php" class="nav-item nav-link">Orders</a>
                <a href="SellerQueries.php" class="nav-item nav-link">Query</a>
                <a href="login.php" class="nav-item nav-link">Logout</a>
              
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
<form method="POST" enctype="multipart/form-data">
<div class="card opacity-100 " style="width: 28rem; margin-left: 500px; margin-top: 80px; margin-bottom:10px; background-color:rgba(255, 255, 255, 0.5);">
            <div class="card-header" style="color:green">
                Add Product
            </div>
            <div class="card-body text-center ">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="area" placeholder="Enter Plot Area">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="Number" placeholder="Enter Plot Number">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="Location" placeholder="Enter Location">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="soil" placeholder="Enter Soil type">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="Amount" placeholder="Enter Amount per Sq.ft">
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" name="description" placeholder="Enter Plot Description"></textarea>
                </div>
                <div class="form-group mb-3">
                 <label style="color:green"><b>ADD A DOCUMENT<b></label><input type="file" class="form-control-file" name="file"style="color:green" >
                </div>
                <button type="submit" name="add" style="width: 100px; background-color:green; border-radius: 10px;"><b>Add Plot</b></button>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST['add'])) {
        $plot_area = $_POST['area'];
        $plot_Number = $_POST['Number'];
        $Location=$_POST['Location'];
        $soil=$_POST['soil'];
        $Amount=$_POST['Amount'];
        $Description = $_POST['description'];
        $document = $_FILES['file']['name'];

        
       
        $document_temp=$_FILES['file']['tmp_name'];
        $document_folder = "uplodedfile/" . $document;
        $select="select * from users where id=$user_id";
        $results = mysqli_query($conn, $select);
        if (mysqli_num_rows($results) > 0) {
                        while ($row = mysqli_fetch_array($results)) {
                            $Mobile=$row['Mobile'];
                        }
        }
        $query = "INSERT INTO products(area,plotnumber,Location,Soiltype,Amount,description,document,user_id,Mobile) VALUES ('$plot_area', '$plot_Number','$Location','$soil',
        '$Amount','$Description', '$document','$user_id','$Mobile')";
        
        $result = mysqli_query($conn, $query);
        if ($result) {
           move_uploaded_file($document_temp,$document_folder);
           echo'<script>alert("added")</script>';
        } else {
            echo'<script>alert("failed")</script>';

        }
    }
    ?>
</body>
</html>