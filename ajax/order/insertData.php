<?php

require('../../dbconnection/database.php');
// session_start();

$nameError="";
$emailError="";
$phoneError="";
$addressError="";
 if(isset($_POST['order'])){
   
    if(empty($_POST['userName']) || $_POST['userName']==null || empty($_POST['email']) || $_POST['email']==null || empty($_POST['phone']) || $_POST['phone']==null || empty($_POST['address']) ||$_POST['address']==null){
            $nameError="Require to fill category name";
            $emailError="Require to fill email";
            $phoneError="Require to fill phone number";
            $addressError="Require to fill address";
       
    }else{
        $id=$_POST['id'];
        $userName=$_POST['userName'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $role=$_POST['role'];
         $categoryName=$_POST['categoryName'];
        // print_r($categoryName);
        $pizzaName=$_POST['pizzaName'];
        $price=$_POST['amount'];
        $qty=$_POST['qty'];
        $msg=$_POST['message'];
       
        $userSql="INSERT INTO users(name,email,address,phone,role,password,image) VALUES('$userName','$email','$address','$phone','$role','','')";
        $conn->exec($userSql);

      
        $last_id = $conn->lastInsertId();
      
        $sql="INSERT INTO orders(user_id,product_id,qty,message) VALUES('$last_id','$id','$qty','$msg')";
        $conn->exec($sql);
       
       // echo "order data inserted successfully!";
        
    
       
   }

 }
?>