<?php
/*
Suresh Shrestha
Module - 1 Assignment
10/23/2026
Description: This program displays student information and performs a simple calculation.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Program</title>
</head>
    <body>

    <h1>Welcome to My First PHP Program</h1>

    <?php
    // First PHP snippet: Display student information.
    $name = "Suresh Shrestha";
    $course = "CSD-440 Server-Side Scripting";
    
    echo "<p>My name is $name.</p>";
    echo "<p>I am studying $course.</p>";
    ?>

    <h2>Simple Addition Using PHP</h2>

    <?php
    // Second PHP snippet: Calculate the sum.
    $number1 = 15;
    $number2 = 25;
    $total = $number1 + $number2;

    echo "<p>First Number: $number1</p>";
    echo "<p>Second Number: $number2</p>";
    echo "<p>Total: $total</p>";
    ?>
    
</body>
</html>