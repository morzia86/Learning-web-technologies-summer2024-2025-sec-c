<?php

$num1 = 20;
$num2 = 50;
$num3 = 10;

echo "Given numbers are: $num1, $num2, $num3<br>";

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is: " . $num2;
} else {
    echo "The largest number is: " . $num3;
}
?>