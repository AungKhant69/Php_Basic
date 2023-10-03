<?php
$filename = "example.txt"; // Name of the file to create or overwrite

// Attempt to open the file for writing (creates a new file if it doesn't exist)
$file = fopen($filename, "w"); // modes (write,read,append)

if ($file) {
    $content = "This is some content to write to the file.\n";
    
    // Write the content to the file
    fwrite($file, $content);
    
    // Close the file
    fclose($file);
    
    echo "File '$filename' has been created and written successfully.";
} else {
    echo "Unable to create or open the file '$filename'.";
}
?>
