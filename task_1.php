<?php
//Task 1: String Manipulation

function modifyText($text) {

    // Convert the string to all lowercase.
    $modifiedText = strtolower($text);


    $modifiedText = str_replace("brown", "red", $modifiedText);


    echo $modifiedText;
}


$text = "The quick brown fox jumps over the lazy dog.";


modifyText($text);