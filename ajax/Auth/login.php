<?php
require ('../../dbconnection/database.php');
session_start();
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
           // print_r($data);
              
                    function generateToken($length = 32) {
                        return bin2hex(random_bytes($length));
                    }
  
              // // Generate a new token
                    $token = generateToken(16); // Generates a 32-character hexadecimal token
  
                if(!empty($data)){
                      if($email==$data['email'] && password_verify($_POST['password'],$data['password'])) {
                 
                          $userData =[
                            "user"=>$data,
                            "token" => $token,
                            "expires_in" =>time()+ 3600 // 1 hour expiration time, for example
                          ];
  
                // Convert the response data to JSON
                          $json_response = json_encode($userData);
  
                // Set the content type to JSON and output the response
                          header('Content-Type: application/json');
               // echo $json_response;
                          if($userData['token']){
                              if($userData['user']['role']=='user'){
                                  header("Location: ../../views/userLayout/welcome.php");

                              }else if($userData['user']['role']=='admin'){
                                  header("Location: ../../views/product/ProductList.php");
                              }
                
             
                           }

                          }else{
                            echo "Invalid user email and password";
                          }   
                }else{
                      header("Location: ../../views/Auth/login.php");
                } 
            
            }
     
  }
  

?>