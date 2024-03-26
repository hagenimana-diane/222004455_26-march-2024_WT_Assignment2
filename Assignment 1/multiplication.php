<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = $num1 * $num2;
        echo "<h1>Multiplication Result</h1>";
        echo "<p>The result of $num1 multiplied by $num2 is: $result</p>";
    }
    ?>
</body>
</html>
