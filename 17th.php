<?php

    $dateTimeString = "2026-07-07 14:45:15";
    $timestamp = strtotime($dateTimeString);

    echo "Base date & time: " . $dateTimeString . "<br><br>";

    echo "1) Hour: " . date("G", $timestamp) . "<br><br>";

    echo "2) Minute: " . date("i", $timestamp) . "<br><br>";

    echo "3) Second: " . date("s", $timestamp) . "<br><br>";

    echo "4) Formatted Date: " . date("l, dS \of F Y h:i:s A", $timestamp) . "<br><br>";

?>