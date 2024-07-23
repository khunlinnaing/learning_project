<?php

        require('../../dbconnection/database.php');
        $categoryName="";
        $pizzaName="";
        $description="";
        $amount="";
        $price="";
        $nameError="";
        $pizzaNameError="";
        $descriptionError="";
        $amountError="";
        $priceError="";
        if(isset($_POST['create'])){
            if(empty($_POST['pizzaName']) || $_POST['pizzaName']==null || empty($_POST['categoryName']) || $_POST['categoryName']==null || empty($_POST['description']) || $_POST['description']==null  || empty($_POST['price']) || $_POST['price']==null){
                $pizzaNameError="Require to fill pizza name";
                $nameError="Require to fill category name";
                $descriptionError="Require to fill description";
                $amountError="Require to fill amount";
                $priceError="Require to fill price";
            }else{
                $pizzaName=$_POST['pizzaName'];
                $categoryName=$_POST['categoryName'];
                $description=$_POST['description'];
                $amount=$_POST['amount'];
                $price=$_POST['price'];
                $sql = "INSERT INTO products (product_name,category_name,description,amount,price)
                VALUES ('$pizzaName','$categoryName','$description','$amount','$price')";

            // use exec() because no results are returned
            $conn->exec($sql);
            header("Location: ../../views/product/ProductList.php");
            //     $data=[
            //         'userData'=>$userData,
            //         'createdSuccess'=>'Inserted data successfully'
            //     ];
            //  $userJson=json_encode($data);
//echo $userJson;
            }  
        }
?>