<?php
require ('../../dbconnection/database.php');
$email="";
$emailError="";
$passwordError="";
  if(isset($_POST['login'])) {
      if(empty($_POST['email']) || $_POST['email']==null || empty($_POST['password']) || $_POST['password']==null){
          $emailError="Required to fill email";
          $passwordError="Required to fill password";
      }else{
          $email=$_POST['email'];
              $query = "SELECT * FROM users WHERE email='$email'";
              $stmt = $conn->prepare($query);
              $stmt->execute();
              $data= $stmt->fetch(PDO::FETCH_ASSOC);
            
              
              function generateToken($length = 32) {
                  return bin2hex(random_bytes($length));
              }
  
              // Generate a new token
              $token = generateToken(16); // Generates a 32-character hexadecimal token
  
            if(!empty($data)){
              if($email==$data['email'] && password_verify($_POST['password'],$data['password'])) {
                 
                   $response =[
                    "user"=>$data,
                    "token" => $token,
                    "expires_in" => 3600 // 1 hour expiration time, for example
              ];
  
                // Convert the response data to JSON
                $json_response = json_encode($response);
  
                // Set the content type to JSON and output the response
                header('Content-Type: application/json');
               // echo $json_response;
               if($response['token']){
               header("Location: ../../views/product/ProductList.php");
               }
              }else{
                  echo "Invalid username or password.";
              }
            }else{
              header("Location: ../../views/Auth/login.php");
            } 
            
     }
     
  }
  

?>