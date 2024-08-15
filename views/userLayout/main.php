
<?php require('../../ajax/category/getData.php'); 
require '../../ajax/order/insertData.php';
require '../../ajax/product/getCategoryId.php';

?> 

<?php require './navBar.php'; ?>
<title>Menu </title>
<link rel="shortcut icon" href="../../static/feather/triangle.svg" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./miniProject.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <div class="mt-5 pt-5 ">
        
                <div class="row">
                        <div class="  w3-sidebar w3-bar-block w3-card w3-animate-left margin-left " style="display:none" id="sideBar">
                          <div class="row ms-2">
                                <div class="col  bold"><h5 class="text-dark mt-3">Content</h5> </div>
                                <div class=" offset-3 col-3">
                                        <button class="btn mt-2" onclick="w3_close()"><img src="../../static/feather/x.svg" class="" alt=""></button>

                                </div>
                                <div class="" >
                                  
                                  <div class="card ">
                                        <h5 class=" m-3">Menu</h5>
                                        <ul >
                                                <?php 

                                                        foreach($data as $d){
                                                                echo '
                                                                       <li class="my-2"> <img src="../../static/feather/chevrons-right.svg">'.$d["category_name"].'
                                                                        <ol  >';
                                                                        foreach($row as $r){
                                                                                
                                                                        if($r["category_id"]==$d["id"]){
                                                                             echo'   <li class="my-2"><i class="bi bi-dash"></i>'.$r["product_name"].'</li>';
                                                                        }

                                                                }
                                                               echo ' </ol></li>';
                                                                
                                                        }
                                                ?>
                                                
                                              
                                                
                                        </ul>
                                  </div>
                                        
                                        
                                        
                                </div>
        
                          </div>
  
  
                        </div>
                    
                    <?php 
                        require '../order/pizzaCard.php';
                        require '../order/orderPizza.php';

                    ?>
                </div>
                
        </div>

<div class="mt-3" style="margin-left:30%;margin-right:30%;">
<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" data-bs-intervel="1000">
  <div class="carousel-inner ">
        
  <?php 
    // Check if $row is not empty to avoid issues
    if (!empty($row)) {
        $first = true; // Flag to determine the first item

        foreach ($row as $m) {
            // Add the 'active' class only to the first item
            $activeClass = $first ? 'active' : '';
            $first = false; // Set flag to false after first item
            
            echo '
            <div class="carousel-item ' . $activeClass . '">
                <div class="card">
                                <div class="card-title">
                                        <h5 class="text-secondary text-center  mt-1">'.$m["product_name"].'</h5>
                                </div>
                                <div class="card-img">
                                        <img src="../../static/image/' . $m["image"]. '" class="d-block w-100 " style="height:320px;width:380px;">

                                </div>
                                <div class="card-footer text-center">
                                        <h5 class="text-muted">$'.$m["price"].'</h5> 
                                </div>
                       </div>
            </div>
            ';
        }
    }
  ?> 
 
       
  </div>
  
  
</div>

</div>

<section class="contactPanel " id="contact">
    <div class="contact">
       <div> <h1><i class="bi bi-boxes me-1"></i>POS Delivery</h1></div>
       <div>
        <h3>For Contact</h3>
            <span>Address :497 Everfreen Rd.Roseville,CA 95673</span>
            <span>Phone:+959 123 456 789</span>
            <span>Email:adobexd@mail.com</span>
       </div>
       <div class="icon">
        <h3>Flow Us On:</h3>
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-twitter'></i>

        <i class='bx bxl-tiktok'></i>

       </div>
    </div>



<div class="secondContact">
    
    <div class="pages">
        <h2>Pages</h2>
        <ul>
            <li><a href="./welcome.php"><i class='bx bx-chevron-right'></i>
Home</a></li>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
About-Us</a></li>
            <li><a href="./main.php"><i class='bx bx-chevron-right'></i>
Our app</a></li>
            <li><a href="#sale"><i class='bx bx-chevron-right'></i>
Categories</a></li>
            <li><a href="#contact"><i class='bx bx-chevron-right'></i>
Contact Us</a></li>
            
        </ul>
    </div>
    <div class="outher">
        <h2>Outher Links</h2>
        <ul>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
Customer review</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Blogs</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Favourite</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
News and Articles</a></li>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
Support team</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Events</a></li>
        </ul>
    </div>
</div>
</section>


<script src="../../static/js/index.js">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></scrip>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
