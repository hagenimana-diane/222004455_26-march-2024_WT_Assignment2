<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtraction Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = $num1 - $num2;
        echo "<h1>Subtraction Result</h1>";
        echo "<p>The result of subtracting $num2 from $num1 is: $result</p>";
    }
    ?>
</body>
</html>