<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$name = "Usman";
$age = 24;

echo "<h2>Welcome to PHP</h2>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";

if ($age >= 18) {
    echo "Status: Adult";
} else {
    echo "Status: Minor";
}

if ($age >= 18) {
    echo "Status: Adult";
} else {
    echo "Status: Minor";
}
?>

</body>
</html>