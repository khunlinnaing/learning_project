<!-- <?php
require_once '../../dbconnection/database.php';
require_once '../../classes/UserClasses.php';
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
// $result = $user->UserRegister($_POST);
$upload_dir = 'uploads/';
        
// Ensure the upload directory exists
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
    echo 'true';
}else{
    echo 'error';
}


// move_uploaded_file($_FILES['profile']['name'], $file_path);
// var_dump($_FILES['profile']['name']);
// echo '<br>'.'hello world'.'<br>';
// var_dump($result);
    // require '../dbconnection/database.php';
    // // require '../../classes/UserClasses.php';
    
    // // $database = new Database();
    // // $db = $database->getConnection();
    
    // // $user = new User($db);
    
?> -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if file was uploaded without errors
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == UPLOAD_ERR_OK) {
        // Get details of the uploaded file
        $file_tmp_name = $_FILES['profile_image']['tmp_name'];
        $file_name = basename($_FILES['profile_image']['name']);
        $file_size = $_FILES['profile_image']['size'];
        $file_type = $_FILES['profile_image']['type'];

        // Set the upload directory
        $upload_dir = '../../uploads/';

        // Ensure the upload directory exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Allowed file types
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        // Check the file type
        if (in_array($file_type, $allowed_types)) {
            // Set the target file path
            $file_path = $upload_dir . $file_name;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($file_tmp_name, $file_path)) {
                echo "The file " . htmlspecialchars($file_name) . " has been uploaded successfully.";
            } else {
                echo "There was an error moving the uploaded file.";
            }
        } else {
            echo "Invalid file type. Please upload a JPEG, PNG, or GIF image.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
} else {
    echo "Invalid request method.";
}
?>

