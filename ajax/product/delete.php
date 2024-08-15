<?php
require('../../dbconnection/database.php');
$id=$_POST['id'];
$sql="SELECT * FROM products WHERE id='$id'";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  $dbImg=$row['image'];

$target_dir = "../../static/image/";

if($dbImg!=null){
    unlink($target_dir.$dbImg);
}

$sql="DELETE FROM products WHERE id='$id'";
$stmt=$conn->prepare($sql);
if($stmt->execute()){
    header("Location: ../../views/product/ProductList.php");
    echo "Delete successfully";
}


return false;
?>