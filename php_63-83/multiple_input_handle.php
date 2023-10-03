<!DOCTYPE html>
<html>
<head>
    <title>Multiple Input Handling Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female<br><br>

        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" id="reading" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" id="traveling" name="hobbies[]" value="Traveling"> Traveling
        <input type="checkbox" id="cooking" name="hobbies[]" value="Cooking"> Cooking<br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="UK">UK</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : [];
    $country = $_POST["country"];

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";

    echo "Hobbies: ";
    if (!empty($hobbies)) {
        echo implode(", ", array_map('htmlspecialchars', $hobbies));
    } else {
        echo "No hobbies selected";
    }
    echo "<br>";

    echo "Country: " . htmlspecialchars($country);
}
?>
