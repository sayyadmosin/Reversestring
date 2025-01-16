<?php

function reverseString($str) {
    return strrev($str);
}

// Example usage
$text = "Hello World!";
$reversed = reverseString($text);
echo $reversed; // Outputs: !dlroW olleH message
?>