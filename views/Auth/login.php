<?php
require '../../ajax/Auth/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row">

            <div class=" col-6 offset-3 mt-5">
                <div class="card  p-4">
                    <div class="card-title text-center">
                           <h4><i class="bi bi-boxes me-1"></i>POS Delivery</h4> 
                           <h5>Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                                <!-- <div class="d-flex"> -->
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="" class="align-end">Email:</label>

                                        </div>
                                        <div class="col-10">
                                            <input type="email" name="email"  class="form-control" placeholder="Enter Email...">
                                                        <small class="text-danger">
                                                            <?php echo $emailError; ?>
                                                        </small> 
                                            </div>
                                    <!-- </div> -->
                                        
                                   
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="">Password:</label>

                                        </div>
                                        <div class="col-10">
                                            <input type="password" name="password"  class="form-control" placeholder="Enter Password">
                                                        <small class="text-danger">
                                                            <?php echo $emailError; ?>
                                                        </small> 
                                        </div>
                                        
                                   
                                    </div>
                                   <button type="submit" class="btn btn-outline-dark p-2 mt-4 w-100 " name="login"><i class="fa-solid fa-right-to-bracket me-2 "></i>Login</button>
                                   <div class="text-center"><small class="text-primary">You've already sign up? <a href="registerNew.php">Register</a></small></div>
                        </form>
                    </div>
                </div>
            </div>


    </div>
</body>

    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></scrip>

</html>