
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php

function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 10;
$width = 5;

$result = calculateArea($length, $width);

echo "The area of the rectangle is: " . $result;

?>
</body>
</html>
