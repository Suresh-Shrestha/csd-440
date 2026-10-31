
<?php
/*
Suresh Shrestha
Module - 3.2 Assignment
10/30/2026
Description: This program creates an HTML table using PHP nested loops. Each cell displays the sum of two randomly generated numbers using
a function from an external PHP file.
*/

require_once "TableFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Random Number Sum Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>PHP Random Number Sum Table</h1>
    <p>This table displays the sum of two random numbers using a PHP function.</p>

    <table>
        <tbody>
            <?php for ($row = 1; $row <= 5; $row++) { ?>
                <tr>
                    <?php for ($col = 1; $col <= 5; $col++) { ?>
                        <?php
                        $number1 = rand(1, 100);
                        $number2 = rand(1, 100);
                        $sum = addNumbers($number1, $number2);
                        ?>
                        <td><?php echo $sum; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
