<?php
    require '../dbconnection/database.php';
    require '../classes/UserClasses.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $user = new User($db);
    
?>