

<?php
/*
Suresh Shrestha
Module-7.2 Form Assignment
11/17/2026

Description: This program creates a student
information form with seven fields.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>

<h2>Student Information Form</h2>

<form action="SureshResponse.php" method="post">

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>
    <br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="1" max="120" required>
    <br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>
    <br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
    <br><br>

    <label for="status">Student Status:</label>
    <select id="status" name="status" required>
        <option value="">Select Status</option>
        <option value="Full-Time">Full-Time</option>
        <option value="Part-Time">Part-Time</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
