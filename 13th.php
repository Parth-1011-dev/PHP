<?php

//  Numeric array 
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

print_r($days);
echo"<br><br>";

// Associative array 
$months = [
    "January" => 31, "February" => 28, "March" => 31, "April" => 30,
    "May" => 31, "June" => 30, "July" => 31, "August" => 31,
    "September" => 30, "October" => 31, "November" => 30, "December" => 31
];

print_r($months);
echo"<br><br>";

// Multidimensional array 
$laptops = [
    "Dell" => ["Model" => "XPS 13", "Price" => 120000],
    "HP"   => ["Model" => "Pavilion", "Price" => 65000]
];

print_r($laptops);
echo"<br><br>";

?>
