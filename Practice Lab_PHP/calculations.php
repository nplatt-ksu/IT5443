<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculations: variables and operators</title>
</head>
<body>
<h1>PHP Calculations</h1>

<h2>Sum, Difference, and Product</h2>
<?php
    $num1 = 12;
    $num2 = 5;

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;

    echo "<p>Sum: $num1 + $num2 = $sum</p>";
    echo "<p>Difference: $num1 - $num2 = $difference</p>";
    echo "<p>Product: $num1 * $num2 = $product</p>";
?>

<h2>Average of Four Numbers</h2>
<?php
    $x1 = 10;
    $x2 = 20;
    $x3 = 30;
    $x4 = 40;

    $average = ($x1 + $x2 + $x3 + $x4) / 4;

    echo "<p>Average of $x1, $x2, $x3, $x4 = $average</p>";
?>

</body>
</html>