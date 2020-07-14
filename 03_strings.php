<!-- This is a tutorial in PHP  -->

<?php

    $str = "This is a String";
    $len = strlen($str);
    echo "The length of string is:". $len;
    echo "<br>";
    
    echo "The number of word in string is: ". str_word_count($str);
    echo "<br>";
    
    echo "<br>";
    echo "The revrse of  string is: ". strrev($str);
    echo "<br>";

    echo "<br>";
    echo "The replaced string is: ". str_replace("is","bro",$str);
    echo "<br>";
    

?>