<?php

    require('../../dbconnection/database.php');
    $categoryName="";
    $amount="";
    $nameError="";
    $amountError="";
    $userId="";
    if(isset($_POST['create'])){
        if(empty($_POST['categoryName']) || $_POST['categoryName']==null || empty($_POST['amount']) || $_POST['amount']==null){
                $nameError="Require to fill category name";
                $amountError="Require to fill amount";
        }else{
            $categoryName=$_POST['categoryName'];
            $amount=$_POST['amount'];
            $userId=$_POST['userId'];

            $sql="INSERT INTO categories(category_name,amount,user_id) VALUES('$categoryName','$amount','$userId')";
            $conn->exec($sql);
          //  header("Location: ../.././views/product/ProductList.php");
           
        }
    }

?>