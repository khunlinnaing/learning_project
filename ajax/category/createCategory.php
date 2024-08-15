<?php

require('../../dbconnection/database.php');
$categoryName="";
$nameError="";
if(isset($_POST['create'])){
    if(empty($_POST['categoryName']) || $_POST['categoryName']==null ){
            $nameError="Require to fill category name";
            $amountError="Require to fill amount";
    }else{
        $categoryName=$_POST['categoryName'];
        $sql="INSERT INTO categories(category_name) VALUES('$categoryName')";
        $conn->exec($sql);
       header("Location: ../../views/category/list.php");
       
    }
}

?>