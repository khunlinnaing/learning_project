<?php

require('../../dbconnection/database.php');
$id=$_POST['id'];

$query = "SELECT * FROM products WHERE id ='$id' ";
$stmt = $conn->prepare($query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;

?>

