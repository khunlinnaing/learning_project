<?php

require('../../dbconnection/database.php');

$sql = 'SELECT * FROM products';
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $row;
?> 

