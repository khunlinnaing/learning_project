<?php
if(isset($_GET['submit'])){
    if(empty($_GET['username'])){
        $err_username="Please enter a username";
    }else{
        $username = $_GET['username'];
    }
    if(empty($_GET['name'])){
        $err_name="Please enter a name";
    }else{
        $name = $_GET['name'];
    }
    if(empty($_GET['email'])){
        $err_email="Please enter a email";
    }else{
        $email = $_GET['email'];
    }
    if(empty($_GET['password'])){
        $err_password="Please enter a password";
    }else{
        $password = $_GET['password'];
    }
    if(empty($_GET['confirm-password'])){
        $err_confirm_password="Please enter a confirm password";
    }else{
        $confirm_password = $_GET['confirm-password'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get request Assignment</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 border border-primary p-4">
                <form action="" method="get">
                    <div>
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" class="form-control" name="name" value="<?php if(isset($name)) echo $name; ?>">
                        <span class="text-danger">
                            <?php
                                if(isset($err_name)) 
                                echo $err_name;
                            ?>
                        </span>
                    </div>
                    <div>
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" id="username" class="form-control" name="username" value="<?php if(isset($username)) echo $username; ?>">
                        <span class="text-danger">
                            <?php 
                                if(isset($err_username)) 
                                echo $err_username; 
                           ?>
                        </span>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" value="<?php if(isset($email)) echo $email; ?>">
                        <span class="text-danger">
                            <?php 
                                if(isset($err_email)) 
                                echo $err_email; 
                           ?>
                        </span>
                    </div>
                    <div>
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" class="form-control" name="password" pattern=".{8,}" value="<?php if(isset($password)) echo $password;  ?>">
                        <span class="text-danger">
                            <?php 
                                if(isset($err_password)) 
                                echo $err_password; 
                           ?>
                        </span>
                    </div>
                    <div>
                        <label for="confirm-password" class="form-label">Confirm-Password:</label>
                        <input type="password" id="confirm-password" class="form-control" name="confirm-password" pattern=".{0,}|^$|^[a-zA-Z0-9]+$" oninvalid="this.setCustomValidity('Password does not match.')" value="<?php if(isset($confirm_password)) echo $confirm_password; ?>">
                        <span class="text-danger">
                            <?php 
                                if(isset($err_confirm_password)) 
                                echo $err_confirm_password; 
                           ?>
                        </span>
                    </div>
                    <div class="mt-2">
                        <button class="bg-primary p-2 rounded" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>