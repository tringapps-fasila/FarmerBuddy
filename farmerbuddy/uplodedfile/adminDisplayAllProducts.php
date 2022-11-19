<?php
include 'config.php'; 

if(isset($_GET['delete'])){ 
    $id = $_GET['delete']; 
    mysqli_query($conn,"DELETE FROM add_product where id = $id "); 
    header('location:adminDisplayAllProducts.php'); 
}; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Display All Products</title>
 <link rel = "stylesheet" href = "adminDisplayAllProducts.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"
crossorigin="anonymous"></script>
</head>
<body>
 <?php
 $select = mysqli_query($conn, "select * from add_product"); 
 ?>
 <div class = "display-container">
 <div class="display">
 <table class="tableStyle" border="1">
 <thead>
 <tr>
 <th>Product image</th>
 <th>Product name</th>
 <th>Shop Name</th>
 <th>Product price</th>
 <th>category</th>
 <th>Units</th>
 <th colspan="2">action</th>
 </tr>
 </thead>
 <?php
 if(mysqli_num_rows($select)>0){
 while ($row = mysqli_fetch_assoc($select)) { 
 ?>
 <tr>
 <td><br><img src="UploadedImages/<?php echo $row['image']; ?>"
alt="image">
 </td>
 <td><?php echo $row['productname']; ?></td>
 <td><?php echo $row['shopname']; ?></td>
 <td>$<?php echo $row['productprice']; ?>/-</td>
 <td><?php echo $row['category']; ?></td>
 <td><?php echo $row['units']; ?> </td>
 <td>
 <a href = "contactseller.php" class = 'btncontact'><i class="fa fa-question-circle" aria-hidden="true"></i>Query</a>
 <a href="adminDisplayAllProducts.php?delete=<?php echo $row['id']; ?> "
class='btnDelete'><i class="fas fa-trash"></i> delete</a>
 </td>  
 </tr>
 <?php }}
 else{?>
     <tr><td colspan = "6">No Products are added </td></tr>
 <?php } ?>
 </table>
 </div>
</body>
</html>