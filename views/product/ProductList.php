<?php
        require('../../ajax/product/getProduct.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php require('.././layout/header.php'); ?>
<div class="col-8 offset-2 mt-3">
<a href="productCreatePage.php" class="text-decoration-none "><button class="btn btn-outline-primary ">Add New Pizza</button></a>
    <table class="mt-3">
        <thead>
            <th class="col-2">Product Name</th>
            <th class="col-2">Category Name</th>
            <th class="col-2">Description</th>
            <th class="col-2">Amount</th>
            <th class="col-2">Price</th>
            <th></th>
        </thead>
        <tbody>

               <?php 
           
                foreach($row as $result){
                    echo "<tr>
                        <td class='pb-3'>".$result['product_name']."</td>
                        <td class='pb-3'>".$result['category_name']."</td>
                        <td class='pb-3'>".$result['description']."</td>
                        <td class='pb-3'>".$result['amount']." </td>
                        <td class='pb-3'>".$result['price']."</td>
                        <td class='pb-3'>

                            <div style='display: flex'>
                                <form method='post' action='detailPage.php'>
                                    <input type='hidden' name='id' value='".$result['id']."'>
                                    <button class='btn btn-success me-2' title='Detail'><i class='fa-solid fa-eye'></i>Detail</button>
                                </form>
                                <form method='post' action='../../ajax/product/delete.php'>
                                    <input type='hidden' name='id' value='".$result['id']."'>
                                    <button class='btn btn-danger me-2' title='Delete'><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>
                                </form>
                                <form method='post' action='updatePage.php'>
                                    <input type='hidden' name='id' value='".$result['id']."'>
                                    <button class='btn btn-primary' title='Update data'><i class='fa-solid fa-pen-to-square'></i>Update</button>
                                </form>
                               
                            </div>
                        </td>
                    </tr>";
                    
                }
            ?> 
          
        </tbody>
    </table>
</div>
</body>
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></scrip>

</html>
