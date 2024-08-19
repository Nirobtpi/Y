<?php 

function processStrings($strings){

    $vowels = ['a', 'e', 'i', 'o', 'u'];

    foreach($strings as $string){
        $vowelCount = 0;

        $lowercase=strtolower($string);

        for($i=0; $i<strlen($lowercase); $i++){
            if(in_array($lowercase[$i], $vowels)){
                $vowelCount++;
            }
        }
        $reversedString = strrev($string);

        echo "Original String: $string\n";
        echo "Reversed String: $reversedString\n";
        echo "Vowel Count: $vowelCount\n";
        echo "--------------------------\n";

    }
}
$inputStrings = ["hello", "world", "PHP", "programming"];
processStrings($inputStrings);


?>