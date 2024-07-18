
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose an image:</label>
        <input type="file" name="image" id="image" required><br><br>
        <input type="submit" name="submit" value="Upload Image">
    </form>
</body>
</html>
