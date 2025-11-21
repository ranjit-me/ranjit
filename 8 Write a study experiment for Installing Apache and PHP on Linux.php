<?php
    // Variable declaration
    $a = 10;
    $b = 3;

    // Arithmetic operators
    $sum        = $a + $b;
    $difference = $a - $b;
    $product    = $a * $b;
    $quotient   = $a / $b;
    $remainder  = $a % $b;

    // Assignment operator
    $a += 5;  // now $a = 15

    // Comparison operator (returns true/false)
    $isGreater = ($a > $b);

    // Logical operator
    $logicalAnd = ($a > 5) && ($b < 5);

    echo "Sum = $sum<br>";
    echo "Difference = $difference<br>";
    echo "Product = $product<br>";
    echo "Quotient = $quotient<br>";
    echo "Remainder = $remainder<br>";
    echo "After a += 5, a = $a<br>";
    echo "Is a greater than b? " . ($isGreater ? "True" : "False") . "<br>";
    echo "Logical AND (a > 5 && b < 5): " . ($logicalAnd ? "True" : "False") . "<br>";
?>
