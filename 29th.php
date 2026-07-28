<?php

session_start();

$_SESSION["username"] = "Parth";
$_SESSION["role"] = "Admin";

echo "Session created successfully!<br>";
echo "Username is: " . $_SESSION["username"];
?>
