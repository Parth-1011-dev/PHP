<?php
echo "<center>";
$num1 = 45;
$num2 = 82;

if ($num1 > $num2) {
    $max = $num1;
} else {
    $max = $num2;
}

if ($num1 < $num2) {
    $min = $num1;
} else {
    $min = $num2;
}

echo "The numbers are: $num1 and $num2 <br>";
echo "<b>Maximum is:</b> $max <br>";
echo "<b>Minimum is:</b> $min <br>";
?>