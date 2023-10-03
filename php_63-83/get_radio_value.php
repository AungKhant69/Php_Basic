<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="option1">
            <input type="radio" id="option1" name="option" value="Red"> Red
        </label><br><br>

        <label for="option2">
            <input type="radio" id="option2" name="option" value="Green"> Green
        </label><br><br>

        <label for="option3">
            <input type="radio" id="option3" name="option" value="Blue"> Blue
        </label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["option"])) {
        $selectedOption = $_POST["option"];

        echo "Selected Option: " . htmlspecialchars($selectedOption);
    } else {
        echo "No option was selected.";
    }
}
?>
