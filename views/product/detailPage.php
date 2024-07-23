<?php

require('../../ajax/product/detail.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>

<?php require('.././layout/header.php'); ?>
    <?php
    echo " 
    <small>".$row['product_name']."</small>
    <small>".$row['category_name']."</small>
    <small>".$row['description']."</small>
    <small>".$row['amount']."</small>
    <small>".$row['price']."</small>
    
    ";
    ?>
    <a href="ProductList.php">Back</a>
</body>
</html>