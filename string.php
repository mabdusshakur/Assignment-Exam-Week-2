<?php

// array of vowels
$vowels = ['a', 'e', 'i', 'o', 'u'];

// string to check
$strings = ["Hello", "World", "PHP", "Programming"];

// iterating through each string
foreach ($strings as $string) {

    // Count the number of vowels for each
    $totalVowelsCount = 0;

    // converting the string lowercase to match the vowels correctly
    $lowerCaseVowels = strtolower($string);

    // converting the string to array of characters
    $characters = str_split($lowerCaseVowels);

    // iterating through each character and checking if it is a vowel
    foreach ($characters as $character) {
        // if the character is a vowel, increment the count then
        if (in_array($character, $vowels)) {
            $totalVowelsCount++;
        }
    }

    // Reversing the string using strrev inbuilt function 
    $reversedString = strrev($string);

    // printing the output as formatted string given in the assignment
    echo "Original String: $string, Vowel Count: $totalVowelsCount, Reversed String: $reversedString" . "<br>";
}