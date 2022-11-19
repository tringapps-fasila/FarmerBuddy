<?php
include './includes/alert.php';
include './includes/dbconfig.php';
session_start();

$id = $_SESSION['id'];
if (isset($_POST['update'])) {
    
    $errors = array();
    if ($_POST) {
  
      // USERNAME VALIDATION
  
      $username = $_POST['Name'];
      if (!empty($_POST['Name'])) {
        if (!preg_match("/^[a-zA-z ]*$/", $username)) {
          array_push($errors, "Only alphabets and whitespace are allowed.");
        }
      } else {
        array_push($errors, "Name Field Is Required.");
      }
  
      //EMAIL VALIDATION
  
      $email = $_POST['email'];
      $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
      if (!empty($_POST['email'])) {
        if (!preg_match($pattern, $email)) {
          array_push($errors, "Email Is Not Valid.");
        }
      } else {
        array_push($errors, "Email Field Is Required");
      }
  
      // MOBILE NUMBER VALIDATION
  
      $mobile = strval($_POST['Mobile']);
      $length = strlen($mobile);
  
      if (!empty($_POST['Mobile'])) {
        if (!preg_match("/^[0-9]*$/", $mobile)) {
          array_push($errors, "Only Numeric Value Is Allowed In Mobile Field.");
        }
        if ($length != 10) {
          array_push($errors, "Mobile must have 10 digits.");
        }
      } else {
        array_push($errors, "Mobile Number Is Required");
      }
  
  
      // PASSWORD VALIDATION
      $password1 = $_POST['password'];
      
      if (strlen($password1) < '8') {
        array_push($errors, "Password Must Be At Least 8 Characters");
      }
  
  
      
  
      // EXECUTE ALERTS
      if (count($errors) !== 0) {
        display_alert($errors);
      }
    }
    else{
    $Name = $_POST['Name'];
    $password1 = $_POST['password'];
    $password = md5($password1);
    $mobile=$_POST['Mobile'];
    $email=$_POST['email'];
    $Image = $_FILES['Image']['name'];
    $Image_tmp_name = $_FILES['Image']['tmp_name'];
    $ImageFolder = 'uplodedfile/' . $Image;
   
   
        $update = "update users set Name = '" . $Name . "',Password 
= '" . $password . "',Mobile = '" . $mobile . "',Image = '" . $Image . "',Email = '" . $email . "' where id=$id";
        $upload = mysqli_query($conn, $update) or die("query failed");
        if ($upload) {
            move_uploaded_file($Image_tmp_name, $ImageFolder);
        } 
    
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="./css/log.css" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boostrap.min.css" rel="stylesheet">

    <link href="css/design.css" rel="stylesheet">

</head>

<body style="background-image: url('./images/agriland.jpg');">
  
    <div class="container">
        <div class="update">
            <?php
            $query ="select * from `users` where id=$id";
            $select = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card opacity-100 " style="width: 28rem; color:black; margin-left: 400px; margin-bottom:50px; margin-top: 50px; background-color:rgba(255, 255, 255, 0.5);">
                        <div class="card-header">
                           <b> Update Profile<b>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <input type="file" name="Image" accept="image/*" value="<?php echo
                                                                                        $row['image']; ?>"><br><br>
                                <input type="text" name="Name" value="<?php echo $row['Name'];
                                                                        ?>"><br><br>

                                <input type="password" name="password" value="<?php echo $row['Password'];
                                                                                ?>"><br><br>
                                <input type="email" name="email" value="<?php echo $row['Email'];
                                                                                ?>"><br><br>
                                <input type="Number" name="Mobile" minlength="10" maxlength="10" value="<?php echo $row['Mobile'];
                                                                            ?>" placeholder="Enter Mobile Number"><br><br>

                                <button type="submit" name="update" style="width: 200px;  background-color:green; border-radius: 10px;"><b>Update Profile</b></button><br><br>
                                <a href="UsersProfile.php" class="btnBack" style="color:black; width: 150px; padding:3px; background-color:green; border-radius: 10px; border:2px solid black">go back</a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </form>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>