<?php

require('../../dbconnection/database.php');
$id=$_POST['id'];
$name=$_POST['pizzaName'];
$categoryName=$_POST['categoryName'];
$description=$_POST['description'];
$amount=$_POST['amount'];
$price=$_POST['price'];
$sql="UPDATE products SET product_name='$name',category_name='$categoryName',description='$description',amount='$amount',price='$price' WHERE id='$id'";
$stmt=$conn->prepare($sql);
$stmt->execute();
// $row=$stmt->fetch(PDO::FETCH_ASSOC);
if($stmt->execute()){
   header("Location: ../../views/product/ProductList.php");
}
return false;

?>