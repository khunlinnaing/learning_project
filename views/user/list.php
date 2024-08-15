<?php
        require('../../ajax/user/getData.php');
?>

    <title>Category List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>

<?php require '../layout/header.php'; ?>
<?php require '../layout/sideBar.php'; ?>

<div id="main">

<div class="">
  <button id="openNav" class="btn w3-xlarge" onclick="w3_open()">
    <img  src="../../static/icons/list.svg" alt="">
</button>
  <div class="w3-container">
        <div class="  px-3  mt-3">
        <table class=" mt-3">
            <thead class="mb-4">
                <th class="col-1">No.</th>
                <th class="col-1">Name</th>
                <th class="col-2">Email</th>
                <th class="col-2">Phone</th>
                <th class="col-2">Address</th>
                <th class="col-1">Role</th>
                <th class="col-2">Image</th>

                <th class="col-2">Created Date</th>
                <th class="col"></th>
            </thead>
            <tbody>

                   <?php 
           
                    foreach($data as $result){
                        echo "<tr>
                            <td class='pb-3'>".$result['id'].".</td>
                            <td class='pb-3'>".$result['name']."</td>
                            <td class='pb-3'>".$result['email']."</td>
                            <td class='pb-3'>".$result['phone']."</td>
                            <td class='pb-3'>".$result['address']."</td>
                            <td class='pb-3'>".$result['role']."</td>
                            <td class='pb-3'>";
                            ?>
                            <?php 
                            if($result['image']!=null){
                                echo "<img src='../../static/image/".$result['image']."' class='w-50 img-thumbnail'></td>";
                            }else{
                                echo "<img src='../../static/image/user.png' class='w-50 img-thumbnail'></td>";
                            }
                            
                            ?>
                            <?php echo "
                            <td class='pb-3'>".$result['created_date']."</td>

                            <td class='pb-3'>

                                <div style='display: flex'>
                                    
                                    <form method='post' action='../../ajax/category/delete.php'>
                                        <input type='hidden' name='id' value='".$result['id']."'>";
                                        ?>
                                        <?php 
                                        if($result['role']=='admin'){
                                       echo " <button  class='btn btn-danger mx-2' title='Delete'  style='display:none;' disabled><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>";
                                        }else if($result['role']=='user'){
                                            echo " <button  class='btn btn-danger mx-2' title='Delete'  ><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>";

                                        }
                                        ?>
                                        <?php echo "
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
