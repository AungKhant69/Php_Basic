<?php
$filename = "example.txt"; // Replace with the name of your file

// Open the file for reading
$file = fopen($filename, "r");

if ($file) {
    echo "File Contents:<br>";
    
    // Read and display the file contents line by line
    while (!feof($file)) {
        $line = fgets($file);
        echo $line;
    }
    
    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>
