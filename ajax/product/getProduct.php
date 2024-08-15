<?php

require('../../dbconnection/database.php');

        $sql = "SELECT p.id as productId,product_name,description,price,image, c.category_name as categoryName FROM products p
        
        JOIN categories c
        ON p.category_id=c.id
        ORDER BY p.id ASC

       
";


$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll();
// //echo json_encode($row);
 return $row;

?> 

