<?php
// Name: Misael Diaz
// Date: October 25, 2026

$name = "Misael Diaz"; // String
$age = 18; // Integer
$isStudent = true; // Boolean

function studentInfo($name, $age) {
    return "My name is $name and I am $age years old.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>

    <h1>Exploring Basic PHP Elements</h1>

    <p>Name: <?php echo $name; ?></p>

    <p>Date: October 25, 2026</p>

    <?php
    echo "<h2>" . studentInfo($name, $age) . "</h2>";

    echo "<p>JavaScript and PHP are both programming languages used in web development. JavaScript mainly runs in the browser and makes websites interactive, while PHP runs on the server and processes information before sending it to the browser.</p>";
    ?>

</body>
</html>
