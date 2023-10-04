<?php
$name = "John";
$age = 30;

// Format and print a message
printf("Hello, my name is %s and I am %d years old.", $name, $age);


$filename = "text.txt";
$num = 5000000;
$city = "Yangon";
$val = 50.5;

// Open the file for writing
$file = fopen($filename, "w");

if ($file) {
    // Format and write a message to the file
    fprintf($file, "there are %d of people in %s. Double value is %f.", $num, $city, $val);

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file for writing.";
}
