<?php
    $array = [1, 2, 3, 4, 5];
    $new_element = '$';
    array_splice( $array, 2, 0, $new_element ); //If length is specified and is zero, no elements will be removed.
    foreach ($array as $x) {
        echo $x . ", ";
    }


