<?php
/*
Suresh Shrestha
Module-5.2 Assignment
11/9/2026
 
Description: This program creates an array of 10 customers, 
displays their information, and searches for customers,
using different data fields.
*/

// Create an array of 10 customers
$customers = [
    ["John", "Smith", 25, "402-555-0101"],
    ["Mary", "Johnson", 32, "402-555-0102"],
    ["David", "Brown", 28, "402-555-0103"],
    ["Sarah", "Davis", 35, "402-555-0104"],
    ["Michael", "Wilson", 42, "402-555-0105"],
    ["Emily", "Taylor", 22, "402-555-0106"],
    ["James", "Anderson", 30, "402-555-0107"],
    ["Linda", "Thomas", 45, "402-555-0108"],
    ["Robert", "Jackson", 27, "402-555-0109"],
    ["Anna", "White", 32, "402-555-0110"]
];

// Function to display customer records
function displayCustomers($records) {

    echo "<table border='1' cellpadding='8'>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Age</th>";
    echo "<th>Phone Number</th>";
    echo "</tr>";

    foreach ($records as $customer) {
        echo "<tr>";

        foreach ($customer as $value) {
            echo "<td>" . htmlspecialchars((string)$value) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

// Search customers by age
$ageSearch = array_filter($customers, function($customer) {
    return $customer[2] == 32;
});

// Search customers by first name
$firstNameSearch = array_filter($customers, function($customer) {
    return $customer[0] == "John";
});

// Search customers by last name
$lastNameSearch = array_filter($customers, function($customer) {
    return $customer[1] == "Brown";
});
// Search customers by phone number
$phoneSearch = array_filter($customers, function($customer) {
    return $customer[3] == "402-555-0105";
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Array Program</title>
</head>
<body>

    <h1>Customer Information</h1>

    <h2>All Customers</h2>
    <?php displayCustomers($customers); ?>

    <h2>Customers Age 32</h2>
    <?php displayCustomers($ageSearch); ?>

    <h2>Customer First Name John</h2>
    <?php displayCustomers($firstNameSearch); ?>

    <h2>Customer Last Name Brown</h2>
    <?php displayCustomers($lastNameSearch); ?>

    <h2>Customer Phone Number 402-555-0105</h2>
    <?php displayCustomers($phoneSearch); ?>

</body>
</html>
