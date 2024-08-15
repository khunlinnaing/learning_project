<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="  w3-sidebar w3-bar-block w3-card w3-animate-left " style="display:none" id="mySidebar">
  <div class="row ms-3">
    <div class="col pt-1 bold">Content </div>
    <div class="col float-end">
    <button class="btn " onclick="w3_close()"><img src="../../static/feather/x.svg" alt=""></button>

    </div>

  </div>
  
  <div class="ms-3">
        <a href="../category/list.php" class="w3-bar-item w3-button text-black text-decoration-none"><img src="../../static/feather/list.svg" class="me-3" alt="">Category</a>

  </div>
  <div class="ms-3">
  <a href="../product/ProductList.php" class="w3-bar-item w3-button text-black text-decoration-none"><img src="../../static/icons/pie-chart.svg"  class="me-3" alt="">Pizza</a>

  </div>
  <div class="ms-3">
  <a href="../order/adminOrderList.php" class="w3-bar-item w3-button text-black text-decoration-none"><img src="../../static/feather/book-open.svg"  class="me-3" alt="">Order List</a>

  </div>
  <div class="ms-3">
  <a href="../user/list.php" class="w3-bar-item w3-button text-black text-decoration-none"><img src="../../static/feather/users.svg" class="me-3"  alt="">User</a>

  </div>
</div>

<script>
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";

      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
</script>