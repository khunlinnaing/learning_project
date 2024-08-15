<?php
 require('../../dbconnection/database.php');

 $sql="SELECT * FROM categories";
 $stmt=$conn->prepare($sql);
 $stmt->execute();
 $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
 return $data;
 
//  echo "dbconnection success";
?>