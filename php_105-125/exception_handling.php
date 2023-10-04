<?php
try {
    // Attempt to perform division
    $numerator = 10;
    $denominator = 0;

    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }

    $result = $numerator / $denominator;

    echo "Result: $result";
} catch (Exception $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
}
?>
