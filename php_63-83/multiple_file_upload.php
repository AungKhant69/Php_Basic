<!DOCTYPE html>
<html>
<head>
    <title>Multiple File Upload Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        <label for="files">Select Files:</label>
        <input type="file" id="files" name="files[]" multiple><br><br>  <!--multiple files-->
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if files were uploaded without errors
    if (isset($_FILES["files"])) {
        $uploadDir = "uploads/"; // Directory where uploaded files will be stored

        // Loop through each uploaded file
        foreach ($_FILES["files"]["error"] as $key => $error) {
            if ($error === UPLOAD_ERR_OK) {
                $tmpName = $_FILES["files"]["tmp_name"][$key];
                $fileName = $uploadDir . basename($_FILES["files"]["name"][$key]);

                // Move the uploaded file to the desired location
                if (move_uploaded_file($tmpName, $fileName)) {
                    echo "File " . htmlspecialchars(basename($fileName)) . " uploaded successfully.<br>";
                } else {
                    echo "Error uploading file " . htmlspecialchars(basename($fileName)) . ".<br>";
                }
            }
        }
    } else {
        echo "No files were uploaded or an error occurred.";
    }
}
?>
