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
    <title>My Orders</title>

    <link href="css/boostrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/log.css" />
  <!-- Template Stylesheet -->
  <link href="css/design.css" rel="stylesheet">
    
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
                 <a href="farmer.php" class="nav-item nav-link active">Home</a>
                 <a href="farmerCart.php" class="nav-item nav-link active">Profile</a>
                 <a href="farmerPlot.php" class="nav-item nav-link active">Plots</a>
                 <a href="farmerCart.php" class="nav-item nav-link active">Cart</a>
                 <a href="Orders.php" class="nav-item nav-link active">Orders</a>
                 <a href="contact.php" class="nav-item nav-link active">Contact</a>

                 <a href="login.php" class="nav-item nav-link active">Logout</a>

             </div>
         </div>
     </nav>
    <?php
    $select = mysqli_query($conn, "select * from myorders");
    ?>
    <div class="display-container">
        <div class="display">
            <table class="table table-dark table-hover table-bordered border-primary mt-5" id="product">
                <thead>
                    <tr>
                        <th scope="col">OrderId</th>
                        <th scope="col">Plot Area</th>
                        <th scope="col">Plot Number</th>
                        <th scope="col">Location</th>
                        <th scope="col">Amount Per Sq.ft</th>
                        <th scope="col">status</th>
                    </tr>
                </thead>

                <?php
                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                ?>
                        <tr>

                            <td><?php echo $row['orderid']; ?></td>
                            <td><?php echo $row['Area']; ?></td>
                            <td><?php echo $row['plotnumber']; ?></td>
                            <td><?php echo $row['Location']; ?></td>
                            <td><?php echo $row['Amount']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6">No Products are Ordered</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>