
<?php
/*
Suresh Shrestha
Module-6.2 Assignment
11/14/2026

Description: This program creates a MyInteger class
that checks even, odd, and prime numbers.
It also demonstrates getter and setter methods.
*/

// Define the MyInteger class
class SureshMyInteger {

    // Property to store an integer
    private int $number;

    // Constructor
    public function __construct(int $number) {
        $this->number = $number;
    }

    // Getter method
    public function getNumber(): int {
        return $this->number;
    }

    // Setter method
    public function setNumber(int $number): void {
        $this->number = $number;
    }

    // Check whether a number is even
    public function isEven(int $number): bool {
        return $number % 2 == 0;
    }

    // Check whether a number is odd
    public function isOdd(int $number): bool {
        return $number % 2 != 0;
    }

    // Check whether the stored number is prime
    public function isPrime(): bool {

        if ($this->number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}

// Create two objects
$integer1 = new SureshMyInteger(7);
$integer2 = new SureshMyInteger(10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>MyInteger PHP Class</title>
</head>
<body>

<h1>PHP MyInteger Class Program</h1>

<h2>First Integer</h2>

<?php
echo "Number: " . $integer1->getNumber() . "<br>";

echo "Even: " .
    ($integer1->isEven($integer1->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Odd: " .
    ($integer1->isOdd($integer1->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Prime: " .
    ($integer1->isPrime() ? "Yes" : "No")
    . "<br>";
?>

<h2>Second Integer</h2>

<?php
echo "Number: " . $integer2->getNumber() . "<br>";

echo "Even: " .
    ($integer2->isEven($integer2->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Odd: " .
    ($integer2->isOdd($integer2->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Prime: " .
    ($integer2->isPrime() ? "Yes" : "No")
    . "<br>";
?>

<h2>Testing Setter Method</h2>

<?php
// Update the first integer
$integer1->setNumber(12);

echo "Updated Number: " .
    $integer1->getNumber() . "<br>";

echo "Even: " .
    ($integer1->isEven($integer1->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Odd: " .
    ($integer1->isOdd($integer1->getNumber()) ? "Yes" : "No")
    . "<br>";

echo "Prime: " .
    ($integer1->isPrime() ? "Yes" : "No")
    . "<br>";
?>

</body>
</html>
