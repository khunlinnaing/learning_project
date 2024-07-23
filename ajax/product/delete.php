<?php
require('../../dbconnection/database.php');
$id=$_POST['id'];
$sql="DELETE FROM products WHERE id='$id'";
$stmt=$conn->prepare($sql);
if($stmt->execute()){
    header("Location: ../../views/product/ProductList.php");
    echo "Delete successfully";
}
return false;
?>