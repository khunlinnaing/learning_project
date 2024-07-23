<?php
require('../../dbconnection/database.php');
$sql="SELECT category_name FROM categories ";
$stmt=$conn->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

?>