<?php
    $array1 = [1, 2, 3, 4, 5];
    unset($array1[2]);  //removing an element
    echo "Re-indexed array is: ";
    $array2 = array_values($array1); //re-indexing elements
    var_dump($array2);

