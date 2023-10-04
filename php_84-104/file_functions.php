<?php
 function createFile($filename, $content) {
    $file = fopen($filename, "w");

    if ($file) {
        $result = fwrite($file, $content);
        fclose($file);

        if ($result !== false) {
            return "File created and data written successfully.";
        } else {
            return "Failed to write data to the file.";
        }
    } else {
        return "Failed to create the file.";
    }
}

function readFileContent($filename) {
    $file = fopen($filename, "r");

    if ($file) {
        $fileContents = fread($file, filesize($filename));
        fclose($file);

        if ($fileContents !== false) {
            return $fileContents;
        } else {
            return "Failed to read the file.";
        }
    } else {
        return "Failed to open the file for reading.";
    }
}

function writeFile($filename, $content) {
    $result = file_put_contents($filename, $content);

    if ($result !== false) {
        return "Data written to the file successfully.";
    } else {
        return "Failed to write data to the file.";
    }
}

function appendToFile($filename, $content) {
    $result = file_put_contents($filename, $content, FILE_APPEND);

    if ($result !== false) {
        return "Data appended to the file successfully.";
    } else {
        return "Failed to append data to the file.";
    }
}



?>