<?php
include './includes/dbconfig.php';
session_start();

$farmer_id = $_SESSION['id'];
if (!isset($farmer_id)) {
    header('location:register.php');
};
if (isset($_GET['logout'])) {
    unset($farmer_id);
    session_destroy();
    header('location:login.php');
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, 'delete from `cart` where cartid = ' . $remove_id) or die('query 
failed');
    header('location:farmerCart.php');
}
if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "delete from `cart` where farmer_id= '$farmer_id' ") or die('query 
failed');
    header('location:farmerCart.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boostrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/log.css" />
    <!-- Template Stylesheet -->
    <link href="css/design.css" rel="stylesheet">

</head>

<body style="background-image: url('./images/agriland.jpg');">
<?php
   include("NavbarFarmer.php");
   ?>
    <div class="display-container">
        <div class="display">
            <table class="table  table-hover table-bordered border-primary mt-5" id="product" style="border:2px solid;color:black">
                <thead>
                    <tr style="border: 2px solid green;">
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
                $total = 0;
                $cart_query = mysqli_query($conn, "select * from `cart` where farmer_id = '$farmer_id' ") or die('query failed');
                if (mysqli_num_rows($cart_query) > 0) {
                    while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                ?>
                        <tr style="border: 2px solid green;">
                            <td>
                                <h3><?php echo $fetch_cart['plotnumber'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['area'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['Location'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['Soiltype'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['Amount'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $fetch_cart['description'] ?></h3>
                            </td>

                            <td>
                                <?php
                                $location = 'farmerCart.php?remove=' . $fetch_cart['cartid'];
                                ?>
                                <a href=<?php echo ($location); ?> onclick='return confirm("Remove Item from cart")' class='btnRemove' style="color:green"><b>REMOVE</b></a>
                            </td>
                        </tr>
                <?php
                    $total++;
                    };
                } else {
                    echo '<tr> <td style = "padding:20px;text-transform:uppercase" colspan = "8">no 
items are added in the cart</td></tr>';
                }
                ?>
                <tr style="border: 2px solid green;">


                    <td><a href=<?php echo ($total !=0) ?'"farmerCart.php?delete_all"  onclick="return confirm("delete all from cart?");"':'javascript:void(0)'; ?> class="btndeleteall <?php echo ($total > 1) ? '' : 'disabled'; ?>"><b>DELETE&nbsp;ALL</b></a></td>
                </tr>
            </table>
            <div class="checkout">
                <a href=<?php echo ($total !=0) ?'FarmerDetails.php':'javascript:void(0)'; ?>  class="btnCheckOut" style="border: 2px solid green; margin-left:20px; padding:4px"><b>proceed to checkout<b></a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>