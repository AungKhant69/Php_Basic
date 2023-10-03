<!DOCTYPE html>
<html>
<head>
    <title>Checkbox Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="red">
            <input type="checkbox" id="red" name="options[]" value="Red"> Red
        </label><br><br>

        <label for="blue">
            <input type="checkbox" id="blue" name="options[]" value="Blue"> Blue
        </label><br><br>

        <label for="green">
            <input type="checkbox" id="green" name="options[]" value="Green"> Green
        </label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["options"])) {
        $selectedOptions = $_POST["options"];

        echo "Selected Options:<br>";
        foreach ($selectedOptions as $option) {
            echo "- " . htmlspecialchars($option) . "<br>";
        }
    } else {
        echo "No options were selected.";
    }
}
?>
