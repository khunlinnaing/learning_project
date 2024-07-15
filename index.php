<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZayBan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .main-content-wrapper{
            padding-top: 50px;
        }
        .topnav{
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            height: 50px;
            z-index: 1;
        }
        .topnav a{
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover{
            background-color: #ddd;
            color: black;
        }
        .topnav a:active{
            background-color: #04AA6D;
            color: white;
        }
        .topnav input[type=text]{
            float: right;
            padding: 6px ;
            margin-right:16px;
            margin-top: 8px;
            border: none;
            font-size: 17px;
            cursor: pointer;
        }
        .row{
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="products.php">Home</a>
        <a href="signup.php">Sign Up</a>
        <a href="login.php">Login</a>
        <input type="text" placeholder="Search....">
        <a href="#about">About</a>
    </div>
    <div class="main-content-wrapper">
        <div class="container">
            <h1 class="display-4">Welcome to Zayban!</h1>
            <hr>

            <h2 class="mb-4">Products:</h2>
            <div class="row">
                <?php
                require_once  'products.php';
                ?>
            </div>
            
        </div> 
   </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>