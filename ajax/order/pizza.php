<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class=" row   w-50 mt-1 ">
    <form action="" method="POST" class="bg-white">
      <div class="d-flex ">
      <input type="text" name="search" id="" class="form-control" placeholder="Search">
      <button type="submit"  class="btn btn-dark"><i class="bi bi-search  "></i></button>
      </div>
                        
    </form>
  </div>
<?php 

require('../../dbconnection/database.php');

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $searchTerm = '%' . $_POST['search'] . '%';
    $sql = "SELECT p.id as productId,product_name,description,price,image, c.category_name as categoryName FROM products p
    
    JOIN categories c
    ON p.category_id=c.id
    WHERE c.category_name 
    LIKE :searchTerm
     ORDER BY p.id ASC
    ";


$stmt = $conn->prepare($sql);
$stmt->execute(['searchTerm' => $searchTerm]);
$row = $stmt->fetchAll();
// //echo json_encode($row);
            if($row){
                echo '<div class="container mt-1">
                <div class="row gap-2 ">';
                
                    

    
                      
                            foreach($row as $r){
                              $cardId =   $r["productId"]; 
                                echo '
                               <div class="col mb-4 ">
                                <div class="card text-center mt-5  " id="'.$cardId.'" style="width:350px;">
                                  <div class="card-header w-100" id="productName">
                                  '.$r["product_name"].'
                                  </div>
                                    <img src="../../static/image/'.$r["image"].'" id="imgId"  class="w-100 card-img" style="width:150px;height:200px;">
                                  <div class="card-body">
                                    <h5 class="card-title bold" >
                                     '.$r["categoryName"].'

                                    </h5>
                                    <p class="card-text">'.$r["description"].'</p>
                                  <button class="btn btn-outline-primary w-100 book-btn" id="add" data-card-id="'.$cardId.'">Book</button> 

                                  </div>
                                  <div class="card-footer w-100 text-body-secondary" id="price">
                                  $ '.$r["price"].'
                                  </div>
                                  </div>
                                </div>';
                            }
    
                       

  
                            echo ' </div>
                            </div>';        
                
            }else{
              echo "<h1 class='text-secondary text-center mt-5'>There is no pizza!</h1>";
            }
            

}else{
  $sql = "SELECT p.id as productId,product_name,description,price,image, c.category_name as categoryName FROM products p
    
      JOIN categories c
      ON p.category_id=c.id
       ORDER BY p.id ASC

      ";
      


  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetchAll();
  // //echo json_encode($row);
              if($row){
                  echo '<div class="container">
                  <div class="row gap-2 ">';
                
                    

    
                      
                              foreach($row as $r){
                                $cardId =   $r["productId"]; 
                                  echo '
                                 <div class="col mb-4 ">
                                  <div class="card text-center mt-5  " id="'.$cardId.'" style="width:350px;">
                                    <div class="card-header w-100" id="productName">
                                    '.$r["categoryName"].'
                                    </div>
                                      <img src="../../static/image/'.$r["image"].'" id="imgId"  class="w-100 card-img" style="width:150px;height:200px;">
                                    <div class="card-body">
                                      <h5 class="card-title bold" >
                                       '.$r["product_name"].'

                                      </h5>
                                      <p class="card-text">'.$r["description"].'</p>
                                    <button class="btn btn-outline-primary w-100 book-btn" id="add" data-card-id="'.$cardId.'">Book</button> 

                                    </div>
                                    <div class="card-footer w-100 text-body-secondary" id="price">
                                    $ '.$r["price"].'
                                    </div>
                                    </div>
                                  </div>';
                              }
    
                       

  
                              echo ' </div>
                              </div>';        
                
              }
}
?>