<?php

    $text = "Hello World! Welcome to the PHP programming.";

    echo "Original String: ".$text."<br><br>";

    //1) strlen()

    echo "1) String Length: " . strlen($text). "<br><br>";

    //2) strpos()

    echo "2) Position of 'Welcome': " . strpos($text, "Welcome") . "<br><br>";

    //3) str_word_count()

    echo "3) Word Count: " . str_word_count($text) . "<br><br>";

    //4) strrev()

    echo "4) Reversed String: " . strrev($text) . "<br><br>";

    //5) strtolower()

    echo "5) Lowercase String: " . strtolower($text) . "<br><br>";

    //6) strtoupper()
    
    echo "6) Uppercase String: " . strtoupper($text) . "<br><br>";

?>