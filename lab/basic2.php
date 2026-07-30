<?php
echo "1. ";
$Principal=1000;
$Rate=2;
$Time=15;
$SimpleInterest=($Principal * $Rate * $Time) / 100;
echo "Result = $SimpleInterest";
echo "<br>";
echo "2. ";
$number = 21;

if ($number <= 1) {
    echo "$number is Not a Prime Number";
} else {
    $count = 0;

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo "$number is a Prime Number";
    } else {
        echo "$number is Not a Prime Number";
    }
}
echo "<br>";
echo "3. ";
$number = 6;
$factorial = 2;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number = $factorial";

echo "<br>";
echo "4. ";
$numbers = array(10, 20, 30, 40, 50);

$sum = 0;
$size = count($numbers);

for ($i = 0; $i < $size; $i++) {
    $sum += $numbers[$i];
}
$average = $sum / $size;

echo "Sum = $sum <br>";
echo "Average = $average ";

echo "<br>";
echo "5. ";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}
?>