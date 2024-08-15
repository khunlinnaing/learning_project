<?php
 require('../../dbconnection/database.php');
 $id=$_POST['id'];
//$id=50;
 $sql="SELECT * FROM products WHERE id='$id'";
 $stmt=$conn->prepare($sql);
 $stmt->execute();
 $info=$stmt->fetchAll(PDO::FETCH_ASSOC); 
 return $info;
//var_dump($info);
//  echo "dbconnection success";
?>