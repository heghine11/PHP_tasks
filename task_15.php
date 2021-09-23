<?php
    $str = 'www.example.com/public_html/index.php';
    //strrchr() function finds the position of the last occurrence of a string,
    // and returns all characters from this position to the end of the string.
    echo substr(strrchr($str, "/"), 1); //returns selected part of a string from 1 index
