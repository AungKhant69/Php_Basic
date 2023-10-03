<!DOCTYPE html>
<html>
<head>
    <title>Input Text Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
