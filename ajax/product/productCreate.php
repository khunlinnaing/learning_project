<?php
        require('../../dbconnection/database.php');
        $categoryName="";
        $pizzaName="";
        $description="";
        $image="";
        $price="";
        $nameError="";
        $pizzaNameError="";
        $descriptionError="";
        $ImageError="";
        $priceError="";
       
        if(isset($_POST['create'])){
            if(empty($_POST['pizzaName']) || $_POST['pizzaName']==null || empty($_POST['categoryName']) || $_POST['categoryName']==null || empty($_POST['description']) || $_POST['description']==null  || empty($_POST['price']) || $_POST['price']==null ){
                $pizzaNameError="Require to fill pizza name";
                $nameError="Require to fill category name";
                $descriptionError="Require to fill description";
              //  $imageError="Require to fill amount";
                $priceError="Require to fill price";
            }else{
                $pizzaName=$_POST['pizzaName'];
                $categoryName=$_POST['categoryName'];
                $description=$_POST['description'];
              
                $price=$_POST['price'];
               
            
                $target_dir = "../../static/image/";

                // Create the target directory if it doesn't exist
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if(!empty($_FILES['image']['name'])){

                    $uploadOk = 1;

                    $imageFileType = strtolower(pathinfo($target_dir.$_FILES['image']['name'], PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                  echo "<small class='text-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</small>";
                                  $uploadOk = 0;
                              }
                     if ($_FILES["image"]["size"] > 5000000) {
                                            echo "<small class='text-danger'>Sorry, your file is too large.</small>";
                                            $uploadOk = 0;
                                        }

                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if ($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                       
                        $uploadOk = 1;
                    } else {
                                    
                         $uploadOk = 0;
                    }
                    if($uploadOk==1){
                    $image=uniqid().'_'.basename($_FILES['image']['name']);
      
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.$image);
                    $sql = "INSERT INTO products (product_name,description,price,category_id,image)
                        VALUES ('$pizzaName','$description','$price','$categoryName','$image')";

                    // use exec() because no results are returned
                    $conn->exec($sql);
               
                    header("Location: ../../views/product/ProductList.php");
                    }else{
                        echo "<small class='text-danger'>Not uploaded photo</small>";
                    }
                }else if($_FILES['image']['name']==null ){
                        $img="";

                        $sql = "INSERT INTO products (product_name,description,price,category_id,image)
                        VALUES ('$pizzaName','$description','$price','$categoryName','$img')";

                    // use exec() because no results are returned
                    $conn->exec($sql);
               
                    header("Location: ../../views/product/ProductList.php");
                   }
                }
              
                // $data=[
                //     'userData'=>$userData,
                //     'createdSuccess'=>'Inserted data successfully'
                // ];
//              $userJson=json_encode($data);
// echo $userJson;
            }  
       
    
?>