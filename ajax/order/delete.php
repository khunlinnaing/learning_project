<?php
require('../../dbconnection/database.php');
$id=$_POST['id'];
$sql="DELETE FROM orders WHERE id='$id'";
$stmt=$conn->prepare($sql);
if($stmt->execute()){
    header("Location: ../../views/order/adminOrderList.php");
    echo "Delete successfully";
}
return false;
?>