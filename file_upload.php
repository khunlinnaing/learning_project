<?php
require './dbconnection/database.php';
if (isset($_POST['create'])) {
    // Define the target directory
    $target_dir = "static/image/";

    // Create the target directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Get the uploaded file information
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an actual image or a fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check the file size (limit to 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // Try to upload the file
    } else {
        $moveFile = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
     
        $image=uniqid().'_'.basename($_FILES["image"]["name"]);
        $sql = "INSERT INTO products (product_name,description,price,image,category_id)
            VALUES ('name','description',12,'$image',1)";

        // // use exec() because no results are returned
        $conn->exec($sql);
        // if () {
        //     echo "The file ". basename($_FILES["image"]["name"]). " has been uploaded.";
        // } else {
        //     echo "Sorry, there was an error uploading your file.";
        // }
    }
}

?>
