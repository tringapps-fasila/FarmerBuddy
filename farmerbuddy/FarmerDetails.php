<?php
include './includes/dbconfig.php';
session_start();
$id = $_SESSION['id'];

if (isset($_POST['next'])) {
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $age=$_POST['age'];
  $sex=$_POST['sex'];
  $date = date('d-m-y h:i:s');
  echo $date;
  mysqli_query($conn, "insert into `customerdetails`(customer_id,Customername,Mail,Mobile,age,sex,date)values('$id','$uname','$email','$mobile','$age','$sex','$date')") or die("query failed");
  

    $signup_query = mysqli_query($conn, "select Name,mobile from users where id = " . $id);
    if ($row = mysqli_fetch_assoc($signup_query)) {
        $Name = $row['Name'];
        $contact = $row['mobile'];
       
    }

    $select = mysqli_query($conn, "select * from cart where farmer_id = " . $id) or die('query 
    failed select');
    while ($row = mysqli_fetch_assoc($select)) {
        $cartid = $row['cartid'];
        $farmer_id = $row['farmer_id'];
        $area = $row['area'];
        $plotnumber = $row['plotnumber'];
        $Location = $row['Location'];
        $Soiltype=$row['Soiltype'];
        $Amount = $row['Amount'];
        $description = $row['description'];
        $plot_id=$row['plot_id'];
        mysqli_query($conn, "insert into 
        customer_order (orderid,farmerid,name,contact,area,plotnumber,Location,Soiltype,description,Amount)values('" . $cartid . "','" . $farmer_id . "','" . $Name . "','" . $contact . "','" . $area . "','" . $plotnumber . "','" . $Location . "','" . $Soiltype. "','" . $description . "','" . $Amount . "')") or die('query failed  details');
        mysqli_query($conn, "insert into 
        myorders (orderid,farmerid,Area,plotnumber,Location,Amount,status)values('" . $cartid . "','" . $farmer_id . "','" . $area . "','" . $plotnumber. "','" . $Location . "','" . $Amount . "','Booked')") or die('query failed order');
        
    }
    mysqli_query($conn, "DELETE FROM cart where farmer_id = $id ") or die('sorry add to cart is
  failed');
    mysqli_query($conn, "DELETE FROM products where plot_id = $plot_id ");
    header('location:farmer.php');
}
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

<body  style="background-image: url('./images/agriland.jpg');">
  <?php
  $select_query = mysqli_query($conn, "select Name,Email,Mobile from `users` where id = '$id'") or die('query failed');
  while ($details = mysqli_fetch_assoc($select_query)) {
  ?>

    <form method="post" action="#">
      <div class="card opacity-100 " style="width: 28rem; margin-left: 500px; margin-top: 100px; background-color:rgba(255, 255, 255, 0.5);">

        <div class="card-body text-center">

          <!-- <p class="card-text "> -->
          <table style="border-spacing: 10px;">
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
              <td><br><b><label for="age">AGE</label></b></td>
              <td><br><input type="text" name="age" required></td>
            </tr>
            <tr>
              <td>
                <b>SEX</b>
              </td>
              <td> <br>
                <input type="radio"  name="sex" value="f" required="true">
                <label><b>FEMALE</b></label>
                <input type="radio"  name="sex" value="m" required="true">
                <label><b>MALE</b></label><br><br>
              </td>

            </tr>
            <tr>
              <td><button type="submit" name='next' style="width: 100px; background-color:green; border-radius: 10px;" >NEXT</button></td>
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