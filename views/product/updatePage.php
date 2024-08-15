<?php require('../layout/header.php'); ?>
<?php require '../layout/sideBar.php';?>
<?php
 require '../../ajax/category/getCategory.php';
    require '../../ajax/product/getData.php';
?>



    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <div id="main">

<div class="">
  <button id="openNav" class="btn w3-xlarge" onclick="w3_open()">
    <img  src="../../static/icons/list.svg" alt="">
</button>
  <div class="w3-container">
        
  <div class="row">

<div class=" col-6 offset-3 mt-5">
    <div class="card  p-4">
    <div class="card-title text-center">
           <h4>Update Pizza Page</h4> 
    </div>
    <div class="card-body">
        <form action="../../ajax/product/update.php" enctype="multipart/form-data" method="post">
       <?php echo'<input type="text" hidden  name="id" value="'.$info[0]["id"].'"> '; ?> 
             
               
                    <div class="row">
                            <div class="col-3">
                                <label for=""> Pizza</label>
                            </div>
                            <div class="col-9">
                                <?php echo ' <input type="text" name="pizzaName"  id="" class="w-100 form-control " value="'.$info[0]["product_name"].'" placeholder="Enter Pizza name">'; ?>
                              
                                <small class="text-danger"> 
                                    <!-- <php 
                                    if($pizzaNameError){
                                    echo $pizzaNameError;
                                    } ?> -->

                                </small>

                            </div>
                    </div>
                <br>
            
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="align-end">Category Name:</label> 

                        </div>
                        <div class="col-9">
                            <select name="categoryName" id="" class="w-100 form-control"> 
                                 <option value="">Choose category name</option>
                                <?php 
                          
                        
                              foreach($data as $d){

                              echo ' 
                              <option value='.$d["id"].' if($info[0]["category_id"]==$d["id"]){ selected } >'.$d["category_name"].'</option>';
                              }
                            ?>  
                         </select> 
                            <small class="text-danger">
                                 <!-- <php echo $nameError; ?> -->

                             </small>

                        </div> 
                    </div>
                    
               
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <label for="">Description:</label>

                        </div>
                        <div class="col-9">
                                <textarea name="description" class="w-100 form-control" id="" placeholder="Enter description"><?php echo' '.$info[0]["description"].''; ?></textarea>
                               <small class="text-danger">
                                 <!-- <php echo descriptionError; ?> -->

                               </small> 

                        </div> 
                    
               
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <label for=""> Image</label>
                        </div>
                        <div class="col-9">
                        
                    
                           <?php 
                            echo ' <img src="../../static/image/'.$info[0]["image"].'" name="dbImg" class="img-thumbnail " style="width:50px;" alt="">';
                           echo'<input type="file" name="image" id="" class="form-control" > '; 
                           ?>
                            <small class="text-danger">
                                <!-- <php echo $imageError; ?> -->

                                </small>

                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-3">
                            <label for=""> Price</label>
                        </div>
                        <div class="col-9">
                           <?php echo' <input type="number" name="price" value="'.$info[0]["price"].'" id="" class="w-100 form-control" placeholder="Enter price ...">'; ?>
                            <small class="text-danger">
                                <!-- <php echo $priceError; ?> -->

                             </small>

                        </div>
                    </div>
                    <div class="col-9 offset-3">
                            <button type="submit" class="btn btn-outline-dark p-1 mt-3 w-100 " name="update"><i class="fa-solid fa-right-to-bracket me-2 "></i>Update</button>

                    </div>
        </form>
    </div>
</div>
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

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

