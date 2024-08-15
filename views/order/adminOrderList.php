<?php
        require('../../ajax/order/retrieve.php');
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
    <h2 class="text-dark">Order List</h2>
        <table class=" mt-3">
            <thead class="mb-4">
                <th class="col-1">ID</th>
                <th class="col-2">Pizza Name</th>
                <th class="col-1">Image</th>

                <th class="col-1">User Name</th>
                <th class="col-2">Phone</th>
                <th class="col-2">Address</th>
                <th class="col-2">Message</th>
                <th class="col-1">Price</th>
                <th class="col-1">QTY</th>
                <th class="">Order Date</th>
                <th></th>
            </thead>
            <tbody>

                   <?php 
                    foreach($row as $result){
                        echo "<tr>
                            <td class='pb-3'>".$result['id']."</td>
                            <td class='pb-3'>".$result['pizzaName']."</td>
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
                            <td class='pb-3'>".$result['userName']."</td>
                            <td class='pb-3'>".$result['phone']."</td>
                            <td class='pb-3'>".$result['address']."</td>
                            <td class='pb-3'>".$result['message']."</td>
                            <td class='pb-3'>".$result['price']."</td>
                            <td class='pb-3'>".$result['qty']."</td>
                            <td class='pb-3'>".$result['created_date']."</td>
                            <td class='pb-3'>

                                <div style='display: flex'>
                                    
                                    <form method='post' action='../../ajax/order/delete.php'>
                                        <input type='hidden' name='id' value='".$result['id']."'>
                                        <button class='btn btn-danger me-2' title='Delete'><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>
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
