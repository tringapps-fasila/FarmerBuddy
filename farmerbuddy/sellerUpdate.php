<?php
include './includes/alert.php';
include './includes/dbconfig.php';

if (isset($_GET["mssg"])) {
    $value = array();
    array_push($value, $_GET["mssg"]);
    display_success($value);
}
$category = '';
$id = $_GET['edit'];
if (isset($_POST['update'])) {
    $plot_area = $_POST['area'];
    $plot_Number = $_POST['plotNumber'];
    $Description = $_POST['description'];
    $document = $_FILES['file']['name'];
    $document_temp = $_FILES['file']['tmp_name'];
    $document_folder = "uplodedfile/" . $document;

    $update = "update products set area= '" . $plot_area . "',plotnumber
= '" . $plot_Number . "',description= '" . $Description . "',document = '" . $document . "' where plot_id = 
'" . $id . "'";
    $upload = mysqli_query($conn, $update);
    if ($upload) {
        move_uploaded_file($document_temp, $document_folder);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="./css/log.css" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boostrap.min.css" rel="stylesheet">

    <link href="css/design.css" rel="stylesheet">
</head>

<body style="background-image: url('./images/agriland.jpg');">

<?php
     include('NavbarSeller.php');
    ?>

    <div class="container">
        <div class="update">
            <?php
            $query = 'select * from products where plot_id = ' . $id;
            $select = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="card opacity-100 " style="width: 28rem; margin-left: 400px; margin-bottom:50px; margin-top: 50px; background-color:rgba(255, 255, 255, 0.5);">
                        <div class="card-header">
                            Update Plot
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <input type="text" name="area" value="<?php echo $row['area'];
                                                                        ?>"><br><br>
                                <input type="text" name="plotNumber" value="<?php echo $row['plotnumber'];
                                                                            ?>"><br><br>
                                <input type="text" name="Location" value="<?php echo $row['Location'];
                                                                            ?>"><br><br>
                                <input type="text" name="soilType" value="<?php echo $row['Soiltype'];
                                                                            ?>"><br><br>
                                <input type="text" name="Amount" value="<?php echo $row['Amount'];
                                                                            ?>"><br><br>
                                <textarea name="description" value="<?php echo $row['description']; ?>"></textarea><br><br>
                                <input type="file" name="file" value="<?php echo $row['document']; ?>"><br><br>
                                <button type="submit" name="update" style="width: 200px; color:black; background-color:green; border-radius: 10px;"><b>Update Product<b></button>
                                <a href="viewproduct.php" style="color:black; width: 150px; padding:3px; background-color:green; border-radius: 10px; border:2px solid black"><b>Go Back<b></a>
                            </div>
                        <?php } ?>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>