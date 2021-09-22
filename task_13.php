<?php
    $str1 = "A string is any series of characters that are interpreted literally by a script.";
    $str1 = strtoupper($str1);
    echo "a) transform a string all uppercase letters: <br>" . $str1;

    $str2 = "Move ALL Uppercase Char To the eNd of stRING";
    $str2 = strtolower($str2);
    echo "<br> </br>b) transform a string all lowercase letters. <br>" . $str2;

    echo "<br> </br>c) make a string's first character uppercase. <br>";
    echo ucfirst("hello world");

    echo "<br> </br>d) make a string's first character of all the words uppercase. <br>";
    echo ucwords("hello world");
