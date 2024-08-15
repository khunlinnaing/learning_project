
<?php require('../../ajax/category/getData.php'); 
?> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="miniProject.css">

<section  class="header " style="height:80px;">   

    <nav class="navbar navbar-expand-lg  p-4 navbar-dark bg-dark w-100">
      <div class="container-fluid justify-content-center align-items-center">
              <div class=""><span class="navbar-brand" ><i class="bi bi-boxes me-1"></i>POS Delivery</span></div>

              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active mt-3" aria-current="page" href="welcome.php">Home</a>
             
                    <li class="nav-item dropdown">
                      <button class="btn btn-outline-dark text-white dropdown-toggle mt-3" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                      </button>
                      <ul class="dropdown-menu dropdown-menu-dark">
                             
                    <?php
                        foreach($data as $d){
                           echo'   <li><a class="dropdown-item" href="#">'.$d["category_name"].'</a></li>';
                        }
                    ?> 
                            
                      </ul>
                    </li>
                  <button type="button" class="btn text-white mt-3" onclick="show()" title="List">  <i class="bi bi-list"></i></button>
                  <a class="nav-link text-white mt-3" href="#">Contact</a>
                  <div class="h3 ms-3  mt-3"><i class="bi bi-telephone "></i> +959 123456789</div>
                  
                </div>
              </div>
              <div class="text-white mt-2"><a href="../../ajax/Auth/logout.php" class="text-decoration-none text-white"><h6>Logout</h6></a></div>
      </div>
  
    </nav>
      
</section>
<script>
function show() {
  document.getElementById("myDiv").style.marginLeft = "25%";
  document.getElementById("sideBar").style.width="25%";

  document.getElementById("sideBar").style.display="block";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
