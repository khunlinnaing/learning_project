<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $name="";
  $email="";
  $phone="";
  $address="";
  $nameError="";
  $emailError="";
  $passwordError="";
  $phoneError="";
  $addressError="";

    if(isset($_POST['login'])){
      
            if(empty($_POST['name']) || $_POST['name']==null || empty($_POST['email']) || $_POST['email']==null || empty($_POST['password']) || $_POST['password']==null || empty($_POST['phone']) || $_POST['phone']==null || empty($_POST['address']) || $_POST['address']==null){
                $nameError="Required to fill name";
                $emailError="Required to fill email";
                $passwordError="Required to fill password";
                $phoneError="Required to fill phone number";
                $addressError="Required to fill address";

            }else{
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
     
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $image=$_FILES['image']['name'];
                $role=$_POST['role'];
                $sql = "INSERT INTO users (name, email,address,phone,role,password,image)
                    VALUES ('$name','$email','$address','$phone','$role','$password','$image')";
  
                // use exec() because no results are returned
                 $conn->exec($sql);
            }
    }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="row">
    <div class="card col-7 offset-5 my-3 " style="width: 500px;">
      <div class="card-body">
        <h5 class="card-title text-center">Register</h5>
        <form action="" method="POST" enctype="multipart/form-data">
          
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter name">
          <small class="text-danger"><?php echo $nameError; ?></small>
        </div>


        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
          <small class="text-danger"><?php echo $emailError; ?></small>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Address</label>
          <textarea name="address" placeholder="Enter Address..." class="form-control" id=""></textarea>
          <small class="text-danger"><?php echo $addressError; ?></small>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter phone number...">
          <small class="text-danger"><?php echo $phoneError; ?></small>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Image</label>
          <input type="file" name="image" class="form-control" id="">

        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Role</label>
          <select name="role" id="" class="form-control">
            <option value="null" >choose one</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Passord</label>
            <input type="password" name="password" id="" placeholder="Enter Password" class="form-control">
            <small class="text-danger"><?php echo $passwordError;?></small>
        </div>
        <div class="text-center">
        <input type="submit" value="Register" name="login" class="btn btn-dark"><br>
        You've already account? <a href="login.php">login</a>
        </div>
                    
        </form>
      </div>
   
    
    </div>
    </div>
</body>
</html>