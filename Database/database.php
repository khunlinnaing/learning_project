<?php
$dsn = 'mysql:host=localhost;dbname=crud_db';
$username = 'root';
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->exec("set names utf8");
    // return $conn;
  //  echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
