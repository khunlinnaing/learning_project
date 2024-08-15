<?php
        require('../../ajax/product/getProduct.php');
?>



    <title>Pizza List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<?php require '../layout/header.php'; ?>
<?php require '../layout/sideBar.php';?>
<div id="main">

<div class="">
  <button id="openNav" class="btn w3-xlarge" onclick="w3_open()">
    <img  src="../../static/icons/list.svg" alt="">
</button>
  <div class="w3-container">
  <div class=" px-3  mt-3">
        <a href="../product/productCreatePage.php" class="text-decoration-none "><button class="btn btn-outline-primary ">Add New Pizza</button></a>
        <h2 class="text-dark">Pizza Lists</h2>

        <table class=" mt-3">
            <thead class="mb-4">
                <th class="col-1">No.</th>
                <th class="col-2">Product Name</th>
                <th class="col-2">Category Name</th>
                <th class="col-3">Description</th>
                <th class="col-1">Image</th>
                <th class="col-1">Price</th>
                <th></th>
            </thead>
            <tbody>

                   <?php 
           
                    foreach($row as $result){
                        echo "<tr>
                            <td class='pb-3'>".$result['productId'].".</td>
                            <td class='pb-3'>".$result['product_name']."</td>
                            <td class='pb-3'>".$result['categoryName']."</td>
                            <td class='pb-3'>".$result['description']."</td>
                            <td class='pb-3'>";
                             ?>
                            <?php 
                            if($result['image']!=null){
                                echo "<img src='../../static/image/".$result['image']."' class='w-50 img-thumbnail'></td>";
                            }else{
                                echo "<img src='../../static/image/default.png' class='w-50 img-thumbnail'></td>";
                            }
                            
                            ?>
                            <?php echo "
                            <td class='pb-3'>".$result['price']."</td>
                            <td class='pb-3'>

                                <div style='display: flex'>
                                    <form method='post' action='../product/detailPage.php'>
                                        <input type='hidden' name='id' value='".$result['productId']."'>
                                        <button class='btn btn-success me-2' title='Detail'><i class='fa-solid fa-eye'></i>Detail</button>
                                    </form>
                                    <form method='post' action='../../ajax/product/delete.php'>
                                        <input type='hidden' name='id' value='".$result['productId']."'>
                                        <button class='btn btn-danger me-2' title='Delete'><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>
                                    </form>
                                    <form method='post' action='./updatePage.php'>
                                        <input type='hidden' name='id' value='".$result['productId']."'>
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
  </div>
</div>

</div>


</body>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";

  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
</script>
