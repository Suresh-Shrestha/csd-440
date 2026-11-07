<?php
/*
Suresh Shrestha
Module-4.2 Assignment
11/6/2026
Description: This program checks six strings to determing whether they are palindromes. 
It displays each string, its reversed version, and the result.
 */

// Function to check if a string is a palindromes
function checkPalindrome($text) {

    // Reverse the original string
    $reversed = strrev($text);

    // Compare original and reversed strings
    if ($text === $reversed) {
        return "Palindrome";
    } else {
        return "Not a Palindrome";
    }
}

// Array containing six example strings
$words = array("madam", "racecar", "level", "hello", "world", "computer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Palindrome Program</title>
</head>
<body>

    <h1>PHP Palindrome Checker</h1>

    <p>This program checks six strings to see
    whether they are palindromes.</p>

    <table border="1" cellpadding="10">
        <tr>
            <th>Original String</th>
            <th>Reversed String</th>
            <th>Result</th>
        </tr>

        <?php
        // Loop through each string
        foreach ($words as $word) {

            // Reverse the string
            $reversed = strrev($word);

            // Call the palindrome function
            $result = checkPalindrome($word);

            // Display the results in a table
            echo "<tr>";
            echo "<td>" . htmlspecialchars($word) . "</td>";
            echo "<td>" . htmlspecialchars($reversed) . "</td>";
            echo "<td>" . $result . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>