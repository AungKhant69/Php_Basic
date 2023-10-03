<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        <label for="file">Choose File:</label>
        <input type="file" id="file" name="file"><br>  <!-- single file -->
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/"; // Directory where uploaded files will be stored
        $uploadedFile = $uploadDir . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadedFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file was uploaded or an error occurred.";
    }
}
?>
