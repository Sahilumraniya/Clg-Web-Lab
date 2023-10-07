<?php
if (isset($_POST["submit"])) {
    $uploadDir = "uploads/";
    // print_r($_FILES);
    $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);

    $allowedTypes = ["image/jpeg", "image/gif", "image/png"];
    $maxFileSize = 800 * 1024; // 800KB

    if (in_array($_FILES["file"]["type"], $allowedTypes) && $_FILES["file"]["size"] <= $maxFileSize) {
        if (file_exists($uploadFile)) {
            echo "File already exists.";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
    } else {
        echo "Invalid file type or size exceeded.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload an Image</h1>
    <form action="P19.php" method="post" enctype="multipart/form-data">
        <label for="file">Select an image file (jpg, gif, or png):</label>
        <input type="file" name="file" id="file" accept=".jpg, .gif, .png" required>
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>