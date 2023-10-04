<?php
$filename = "example.txt"; // Replace with the name of your file
$data = "This is additional data to append to the file.\n";

// Open the file for appending
$file = fopen($filename, "a");

if ($file) {
    $result = fwrite($file, $data);

    if ($result !== false) {
        echo "Data appended to the file successfully.";
    } else {
        echo "Failed to append data to the file.";
    }

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file for appending.";
}
?>
