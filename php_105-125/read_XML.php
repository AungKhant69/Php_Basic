<?php
// Load and parse the XML file
$xml = simplexml_load_file('data.xml');

if ($xml === false) {
    die('Error loading XML file.');
}

// Access elements and attributes
foreach ($xml->person as $person) {
    $name = (string)$person->name;
    $age = (int)$person->age;
    $city = (string)$person->city;

    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "City: $city<br><br>";
}
?>
