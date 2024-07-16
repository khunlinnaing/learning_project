<?php
        require('createCategory.php');
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

<div class=" col-6 offset-3 mt-5">
    <div class="card  p-4">
        <div class="card-title text-center">
               <h4>Create Category Page</h4> 
        </div>
        <div class="card-body">
            <form action="" method="post">
        
                 
                       <div class="col-6 offset-6 ">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Inserted data successfully! <i class="fa-solid fa-check text-success me-2"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        </div>
                        <input type="text" name="userId" hidden value="1" id="">
                        <div class="row">
                                <div class="col-3">
                                    <label for=""> Pizza Category Name</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="categoryName" id="" class="w-100 form-control " placeholder="Enter Pizza category name">
                                    <small class="text-danger"><?php echo $nameError; ?></small>

                        </div>
                    </div>
                    <br>                
                        <div class="row">
                            <div class="col-3">
                                <label for=""> Amount</label>
                            </div>
                            <div class="col-9">
                                <input type="number" name="amount" id="" class="w-100 form-control " placeholder="Choose what you want amount ...">
                                <small class="text-danger"><?php echo $amountError; ?></small>

                            </div>
                        </div>
                        <div class="col-9 offset-3">
                                <button type="submit" class="btn btn-outline-dark p-1 mt-3 w-100 " name="create"><i class="fa-solid fa-right-to-bracket me-2 "></i>Create</button>

                        </div>
            </form>
        </div>
    </div>
</div>


</div>
</body>
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></scrip>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>