<?php
require('../../dbconnection/database.php');
$id=$_POST['id'];

$query = "SELECT products.id as productId,categories.id as categoryId,products.category_id as pizzaId,product_name,description,price,image, categories.category_name as categoryName 
FROM products 
JOIN categories
ON products.category_id=categories.id
WHERE products.id ='$id' ";
$stmt = $conn->prepare($query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;

?>

