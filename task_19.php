<?php
    $str1 = "football";
    $str2= "footboll";
    $str_pos = strspn($str1 ^ $str2, "\0"); //xor
    echo "First difference between two strings at position $str_pos: "
        . $str1[$str_pos] . " vs " . $str2[$str_pos];

