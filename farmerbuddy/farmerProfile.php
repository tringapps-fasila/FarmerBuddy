<?php
include './includes/dbconfig.php';
session_start();
$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Details</title>
  <link href="css/boostrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/log.css" />
  <!-- Template Stylesheet -->
  <link href="css/design.css" rel="stylesheet">
</head>

<body style="background-image: url('./images/agriland.jpg');">
  <?php
  $select_query = mysqli_query($conn, "select * from `users` where id = '$id'") or die('query failed');
  while ($details = mysqli_fetch_assoc($select_query)) {
    $password = $details['Password'];
    $enc_password = md5($password);
  ?>
    <?php
    include("NavbarFarmer.php");
    ?>
    <form method="post" action="#">
      <div class="card opacity-100 " style="width: 28rem; margin-left: 500px; margin-top: 100px; background-color:rgba(255, 255, 255, 0.5);">

        <div class="card-body text-center">

          <!-- <p class="card-text "> -->
          <table style="border-spacing: 10px;">
            <tr>
              <td><br><b><label>IMAGE </label></b></td>
              <?php
              if ($details['Image'] == '') {
              ?>
                <td><br> <img src="uplodedfile/<?php
                                                echo "user.jpg"; ?>" class="card-img-top" alt="..."></td>
              <?php
              } else {
              ?>
                <td><br> <img src="uplodedfile/<?php
                                                echo $details['Image'] ?>" class="card-img-top" alt="..."></td>
              <?php
              } ?>
            </tr>
            <tr>
              <td><br><b><label for="uname">USERNAME </label></b></td>
              <td><br><input type="text" name="uname" id="uname" value="<?php echo $details['Name'] ?>" required></td>
            </tr>

            <tr>

              <td><br><b><label for="email">EMAIL </label></b></td>
              <td><br><input type="text" name="email" value="<?php echo $details['Email'] ?>" required></td>
            </tr>

            <tr>
              <td><br><b><label for="mobile">MOBILE </label></b></td>
              <td><br><input type="text" name="mobile" value="<?php echo $details['Mobile'] ?>" required></td>
            </tr>


            <tr>
              <td><br><b><label for="mobile">PASSWORD</label></b></td>
              <td><br><input type="text" name="mobile" value="<?php echo $enc_password;
                                                              ?>" required></td>
            </tr>

            <tr>
              <td><button type="submit" name='next' style="width: 100px; background-color:green; border-radius: 10px;">NEXT</button></td>
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