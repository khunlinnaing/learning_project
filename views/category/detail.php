<?php

require('../../ajax/category/detail.php');

?>


    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<?php require('../layout/header.php'); ?>
<?php require '../layout/sideBar.php';?>


<div id="main">

<div class="">
  <button id="openNav" class="btn w3-xlarge" onclick="w3_open()">
    <img  src="../../static/icons/list.svg" alt="">
</button>
  <div class="w3-container d-flex justify-content-center align-items-center  ">
     

<div class="card text-center mt-5  " style="width:450px;">
     
      <div class="card-body">
        <h5 class="card-title bold">
        <?php echo "".$row['category_name'].""; ?>

        </h5>
        <a href="../product/ProductList.php" class="btn btn-primary">Go Back</a>
      </div>
      <div class="card-footer w-100 text-body-secondary">
       <?php echo "".$row['created_date'].""; ?>
      </div>
    </div>

  </div>
</div>

</div>


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";

  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}



</script>