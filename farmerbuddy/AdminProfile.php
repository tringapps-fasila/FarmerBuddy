<?php include './includes/dbconfig.php'; 

if(isset($_POST['edit'])){ 
   
  header('location:AdminUpdateProfile.php'); 
}; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Details</title>
  <link href="css/boostrap.min.css" rel="stylesheet">
 
  <!-- Template Stylesheet -->
  <link href="css/design.css" rel="stylesheet">
</head>

<body  style="background-image: url('./images/agriland.jpg');">
  <?php
  $select_query = mysqli_query($conn, "select * from `admin`") or die('query failed');
  while ($details = mysqli_fetch_assoc($select_query)) {
  ?>
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" id="home">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farmer</span>Buddy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="Admin.php" class="nav-item nav-link ">Home</a>
                <a href="AdminProfile.php" class="nav-item nav-link active">Profile</a>
                <a href="FarmerDetail.php" class="nav-item nav-link">View Users</a>
                <a href="viewqueries.php" class="nav-item nav-link">View Queris</a>
                <a href="AdminLogin.php" class="nav-item nav-link">Logout</a>

            </div>
        </div>
    </nav>

    <form method="post" action="#">
      <div class="card opacity-100 " style="width: 28rem; color:black; margin-left: 500px; margin-top: 100px; background-color:rgba(255, 255, 255, 0.5);">

        <div class="card-body text-center">

          <!-- <p class="card-text "> -->
          <table style="border-spacing: 10px;">
            <tr>
              <td><br><b><label for="uname">IMAGE </label></b></td>
              <?php
              if($details['image']=='')
              {
                ?>
              <td><br> <img src="uplodedfile/<?php 
              echo "user.jpg"; ?>"class="card-img-top" alt="..."></td>
              <?php 
              }else{
                  ?>
              <td><br> <img src="uplodedfile/<?php 
              echo $details['image'] ?>"class="card-img-top" alt="..."></td>
              <?php
              }?>
            </tr>

            <tr>

              <td><br><b><label>USERNAME:</label></b></td>
              <td><br><b><?php echo $details['Username'] ?></b></td>
            </tr>
            <tr>

              <td><br><b><label>PASSWORD:</label></b></td>
              <td><br><b><?php echo $details['Password'] ?></b></td>
            </tr>
    
            <tr>
              <td><br><b><label >MOBILE:</label></b></td>
              <?php
              if($details['Mobile']=='')
              {
                ?>
              <td><br><b>----</b></td>
              <?php 
              }else{
                  ?>
              <td><br><b><?php echo $details['Mobile'] ?></b> </td>
              <?php
              }?>
            </tr>
            
            <tr>
              <td><br><button type="submit" name='edit' style="width: 100px; margin-bottom:20px;  background-color:green; border-radius: 10px;" >EDIT</button></td>
            </tr>

          </table>
        </div>
      </div>
    </form>
  <?php } ?>
  <!-- <script>
        function validate(){
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const address = document.getElementById('address').value;
            const regName = /^[a-zA-Z]+$/;
            if((!regName.test(fname))||(!regName.test(lname))){
                alert('Please enter valid name');
                return false;
            }
            if(address.length < 15){
                alert('please enter valid address');
                return false;
            }
        }

    </script> -->

</body>

</html>