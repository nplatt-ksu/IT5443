<!DOCTYPE html>
<html>
<head>
    <title>PHP first program: variables and outputs</title>
</head>
<body>
<h1>Generate HTML content</h1>
<p>This example shows how to generate dynamic HTML content with mixed text and variables</p>
<?php
    $name = "Nick"; // variable for my name
    echo "<h2>Welcome, $name!</h2>"; // display Welcome, followed by my name
?>
<?php
    $heading = "h3"; // variable for an HTML heading element
    echo "<$heading>Welcome, $name!</$heading>"; // use the heading variable to display the welcome text
?>
<?php
    $style = "color:blue; font-size:24px"; // variable for font color/size
    $output = "<h2 style='$style'>Welcome, $name!</h2>"; // use the style variable in an inline style
    echo $output;

    // check what's generated in browser --> source code.
?>
</body>
</html>