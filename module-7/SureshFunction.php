
<?php
/*
Suresh Shrestha
Module-7.2 Form Assignment
11/17/2026

Description: This file contains functions
to validate the submitted form information.
*/

// Check whether a field is empty
function checkEmpty($value) {
    return trim($value) == "";
}

// Check email
function checkEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Check age
function checkAge($age) {
    return ctype_digit($age) && $age >= 1 && $age <= 120;
}

// Check phone number
function checkPhone($phone) {
    return preg_match("/^[0-9]{10}$/", $phone) === 1;
}

// Check date of birth
function checkDateOfBirth($dob) {
    $date = DateTime::createFromFormat("!Y-m-d", $dob);

    return $date !== false &&
           $date->format("Y-m-d") == $dob &&
           $date <= new DateTime("today");
}

// Check student status
function checkStatus($status) {
    return $status == "Full-Time" || $status == "Part-Time";
}

// Make submitted data safe to display
function clean($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
