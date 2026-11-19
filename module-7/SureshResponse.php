
<?php
/*
Suresh Shrestha
Module-7.2 Form Assignment
11/17/2026

Description: This program receives form data,
checks the information, and displays the result.
*/

// Include the function file
require_once "SureshFunction.php";

// Receive form data
$firstName = trim($_POST["firstName"] ?? "");
$lastName = trim($_POST["lastName"] ?? "");
$email = trim($_POST["email"] ?? "");
$age = trim($_POST["age"] ?? "");
$dob = trim($_POST["dob"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$status = trim($_POST["status"] ?? "");

// Check the submitted information
$error = "";

if (checkEmpty($firstName) || checkEmpty($lastName) ||
    checkEmpty($email) || checkEmpty($age) ||
    checkEmpty($dob) || checkEmpty($phone) ||
    checkEmpty($status)) {

    $error = "Please fill in all fields.";

} elseif (!checkEmail($email)) {

    $error = "Please enter a valid email.";

} elseif (!checkAge($age)) {

    $error = "Please enter a valid age.";

} elseif (!checkPhone($phone)) {

    $error = "Please enter a valid 10-digit phone number.";

} elseif (!checkDateOfBirth($dob)) {

    $error = "Please enter a valid date of birth.";

} elseif (!checkStatus($status)) {

    $error = "Please select a valid student status.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form Result</title>
</head>
<body>

<h2>Student Information Result</h2>

<?php
if ($error != "") {

    echo "<h3>Error!</h3>";
    echo "<p>" . clean($error) . "</p>";

} else {

    echo "<h3>Form Submitted Successfully!</h3>";

    echo "<p>First Name: " . clean($firstName) . "</p>";
    echo "<p>Last Name: " . clean($lastName) . "</p>";
    echo "<p>Email: " . clean($email) . "</p>";
    echo "<p>Age: " . clean($age) . "</p>";
    echo "<p>Date of Birth: " . clean($dob) . "</p>";
    echo "<p>Phone Number: " . clean($phone) . "</p>";
    echo "<p>Student Status: " . clean($status) . "</p>";
}
?>

<p><a href="SureshForm.php">Back to Form</a></p>

</body>
</html>


