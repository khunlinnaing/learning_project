<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Get details of the uploaded file
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Set the upload directory
        $uploadDir = 'uploads/';

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Allowed file types
        $allowedFileTypes = ['jpg', 'jpeg', 'png', 'gif'];

        // Check the file type
        if (in_array($fileExtension, $allowedFileTypes)) {
            // Sanitize the file name
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // Set the target file path
            $destPath = $uploadDir . $newFileName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                echo "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
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
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose an image:</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>
        <input type="submit" name="submit" value="Upload Image">
    </form>
</body>
</html>
