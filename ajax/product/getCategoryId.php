<?php

require('../../dbconnection/database.php');

        $sql = "SELECT p.id as productId,p.category_id,product_name,p.image,p.price FROM products p
        
        JOIN categories c
        ON p.category_id=c.id

       
";


$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll();
// print_r($row);
// //echo json_encode($row);
 return $row;

?> 

