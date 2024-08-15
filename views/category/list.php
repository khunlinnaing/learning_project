<?php
        require('../../ajax/category/getCategory.php');
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
        <a href="./createCategoryPage.php" class="text-decoration-none "><button class="btn btn-outline-primary ">Add New Category</button></a>
        <table class=" mt-3">
            <thead class="mb-4">
                <th class="col-1">No.</th>
                <th class="col-3">Category Name</th>
            
                <th class="col-3">Created Date</th>
                <th class="col-5"></th>
            </thead>
            <tbody>

                   <?php 
           
                    foreach($data as $result){
                        echo "<tr>
                            <td class='pb-3'>".$result['id'].".</td>
                            <td class='pb-3'>".$result['category_name']."</td>
                            <td class='pb-3'>".$result['created_date']."</td>
                            <td class='pb-3'>

                                <div style='display: flex'>
                                    <form method='post' action='./detail.php'>
                                        <input type='hidden' name='id' value='".$result['id']."'>
                                        <button class='btn btn-success mx-2' title='Detail'><i class='fa-solid fa-eye'></i>Detail</button>
                                    </form>
                                    <form method='post' action='../../ajax/category/delete.php'>
                                        <input type='hidden' name='id' value='".$result['id']."'>
                                        <button class='btn btn-danger mx-2' title='Delete'><i class='fa-solid fa-trash-can-arrow-up'></i>Delete</button>
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
