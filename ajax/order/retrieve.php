<?php
            require('../../dbconnection/database.php');
            $sql="SELECT orders.id,products.product_name as pizzaName,products.image as image,products.price as price,qty,users.name as userName,users.address as address ,users.phone as phone ,message,orders.created_date
            FROM orders 
            JOIN products ON  orders.product_id=products.id 
            JOIN users ON orders.user_id=users.id
            ORDER BY orders.id ASC
            ";
           
            $stmt=$conn->prepare($sql);
            $stmt->execute();

            $row= $stmt->fetchAll(PDO::FETCH_ASSOC);
         //   print_r($row);
            //echo "data retrieve successfully!";
?>