<?php
function incrementCounter() {
    static $counter = 0; // Declare a static variable $counter and initialize it to 0.
    $counter++; // Increment the static variable.
    echo "Counter: $counter<br>";
}

// Call the function multiple times
incrementCounter();
incrementCounter();
incrementCounter();
?>
