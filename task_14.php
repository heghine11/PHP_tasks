<?php
    $word = 'lazy';
    $str = 'The quick brown fox jumps over the lazy dog.';

    if(strpos($str, $word)){
        echo "Successful";
    } else{
        echo "Failed";
    }
