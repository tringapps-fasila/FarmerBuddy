<?php include './includes/dbconfig.php';
session_start();

$id = $_SESSION['id'];
if (isset($_POST['edit'])) {

    header('location:UserProfileUpdate.php');
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

<body style="background-image: url('./images/agriland.jpg');">
    <?php
    $select_query = mysqli_query($conn, "select * from `users` where id=$id") or die('query failed');
    while ($details = mysqli_fetch_assoc($select_query)) {
        $password = $details['Password'];
        $enc_password = md5($password);
    ?>
    <?php
    if($details['Category']==2)
    {
        include('NavbarSeller.php');
       
    }
    else if($details['Category']==1){
        include('NavbarFarmer.php');   
    }
    ?>

        <form method="post" action="#">
            <div class="card opacity-100 " style="width: 28rem; color:black; margin-left: 500px; margin-top: 70px; background-color:rgba(255, 255, 255, 0.5);">

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

                            <td><br><b><label>USERNAME:</label></b></td>
                            <td><br><b><?php echo $details['Name'] ?></b></td>
                        </tr>
                        <tr>

                            <td><br><b><label>PASSWORD:</label></b></td>
                            <td><br><b>Password is encrypted</b></td>
                        </tr>
                        <tr>

                            <td><br><b><label>EMAIL:</label></b></td>
                            <td><br><b><?php echo $details['Email'] ?></b></td>
                        </tr>
                        <tr>
                            <td><br><b><label>MOBILE:</label></b></td>
                            <?php
                            if ($details['Mobile'] == '') {
                            ?>
                                <td><br><b>----</b></td>
                            <?php
                            } else {
                            ?>
                                <td><br><b><?php echo $details['Mobile'] ?></b> </td>
                            <?php
                            } ?>
                        </tr>

                        <tr>
                            <td><br><button type="submit" name='edit' style="width: 100px; margin-bottom:20px;  background-color:green; border-radius: 10px;">EDIT</button></td>
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