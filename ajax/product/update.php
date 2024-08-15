<?php
 //require('/detail.php');
require('../../dbconnection/database.php');

if(isset($_POST['update'])){
  $id=$_POST['id'];

  $pizzaName=$_POST['pizzaName'];
  $categoryName=$_POST['categoryName'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  if(empty($pizzaName) || $pizzaName==null || empty($categoryName) || $categoryName==null || empty($description) || $description==null  || empty($price) || $price==null ){
    $pizzaNameError="Require to fill pizza name";
    $nameError="Require to fill category name";
    $descriptionError="Require to fill description";
 // $imageError="Sorry, your file was not uploaded.";
    $priceError="Require to fill price";
// header("Location: ../../views/product/updatePage.php");
}else{

 
  $target_dir = "../../static/image/";
 
  $sql="SELECT * FROM products WHERE id='$id'";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  $dbImg=$data['image'];
  if(!empty($_FILES['image']['name'])){
    $uploadOk = 1;
    if($dbImg !=null){
      unlink($target_dir.$dbImg);
    }

    $imageFileType = strtolower(pathinfo($target_dir.$_FILES['image']['name'], PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
              }
     if ($_FILES["image"]["size"] > 5000000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }

     $check = getimagesize($_FILES["image"]["tmp_name"]);
             if ($check !== false) {
                 
                 $uploadOk = 1;
             } else {
                                     
                  $uploadOk = 0;
             }

             
             if($uploadOk==1){
              $image=uniqid().'_'.basename($_FILES['image']['name']);

               move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.$image);
              $sql="UPDATE products SET product_name='$pizzaName',category_id='$categoryName',description='$description',image='$image',price='$price' WHERE id='$id'";
              $stmt=$conn->prepare($sql);
              $stmt->execute();
                 header("Location: ../../views/product/ProductList.php");
            }else{
              echo "<small class='text-danger'>Sorry,your file is not uploaded</small>";
            }
    
  }else if($_FILES['image']['name']==null){
    $sql="UPDATE products SET product_name='$pizzaName',category_id='$categoryName',description='$description',image='$dbImg',price='$price' WHERE id='$id'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
       header("Location: ../../views/product/ProductList.php");
  }
  



 
 
 }
}
?>