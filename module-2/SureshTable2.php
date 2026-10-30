<?php
/* Suresh Shrestha
Module - 2.2 Assignment
10/30/2026
Description: This program creates an HTML table using PHP nested loops and displays randomly generated numbers in each cell.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        </style>
</head>
<body>

    <h1>PHP Random Number Table</h1>
    <p>This table displays random numbers using PHP nested loops.</p>

    
<table>
    <tbody>
        <?php for ($row = 1; $row <= 5; $row++) { ?>
            <tr>
                <?php for ($col = 1; $col <= 5; $col++) { ?>
                    <td><?php echo rand(1, 100); ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

   
</body>
</html>