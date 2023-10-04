<?php
$filename = "example.txt"; // Replace with the name of file
$data = "text can be changed by fwrite and a variable.\n";

// Open the file for writing (creates the file if it doesn't exist)
$file = fopen($filename, "w");

if ($file) {
    $result = fwrite($file, $data);

    if ($result !== false) {
        echo "Data written to the file successfully.";
    } else {
        echo "Failed to write data to the file.";
    }

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file for writing.";
}
?>
