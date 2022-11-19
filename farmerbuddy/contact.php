<?php
include './includes/dbconfig.php';
if(isset($_POST['send'])){
 $mobile = $_POST['phone']; 
 $email = $_POST['email']; 
 $msg = $_POST['message']; 
 $To=$_POST['tophone'];

 if($conn->connect_error){ 
 die("connection failed : ".$conn->connect_error); 
 } 
 else{ 
 mysqli_query($conn,"insert into 
contact_Admin(Mobile,Email,Message,ToNum)values('".$mobile."','".$email."','".$msg."','".$To."')") or die('query failed'); 
 echo "<script>alert('Message sent Successfully');</script>"; 
 } 
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/log.css" />
    <link href="css/boostrap.min.css" rel="stylesheet">

</head>

<body style="background-image: url('./images/agriland.jpg');">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" id="home">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farmer</span>Buddy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="farmer.php" class="nav-item nav-link">Home</a>
                <a href="farmer.php" class="nav-item nav-link">Profile</a>
                <a href="farmerPlot.php" class="nav-item nav-link ">Plots</a>
                <a href="farmerCart.php" class="nav-item nav-link">Cart</a>
                <a href="Orders.php" class="nav-item nav-link">Orders</a>
                <a href="contact.php" class="nav-item nav-link  active">Contact</a>
                <a href="login.php" class="nav-item nav-link">Logout</a>

            </div>
        </div>
    </nav>
   
    <div class="card opacity-100" style="width: 28rem; margin-left: 450px; margin-top: 100px;color:black; background-color:rgba(255, 255, 255, 0.5);">

        <form method="post" action="#">
            <div class="card-body">
                <h3 class="card-title">CONTACT</h3><br>
                <table>
                    <tr>
                        
                        <td><input type="text" name="email" placeholder="EMAIL" style="margin-left: 25px;"/></td>
                    </tr>

                    <tr>
                       
                        <td><input type="Numbber" name="phone" placeholder="PHONE NUMBER" style="margin-left: 25px;"/></td>
                    </tr>
                    
                    <tr>
                       
                        <td><input type="Number" name="tophone" placeholder="TO PHONE NUMBER" style="margin-left: 25px;"/></td>
                    </tr>
                    <tr>

                       
                       <td><textarea name="message" placeholder="MESSAGE" ></textarea></td>
                   </tr>

                </table>
                <br>
                <button type="submit" style="width: 100px; background-color:green; border-radius: 10px; margin-left:27px;" name="send"><i class="bi bi-chat"></i><b>SEND</b></button>
            </div>
        </form>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>