<?php
    $jsonObj = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
            "Publisher": "Little Brown"
    }}';
    $array = json_decode($jsonObj, true); //decoded into associative array

    function printArray($value, $key) {
        echo $key . " : " . $value . "<br>";
    }

    //runs each array element in a user-defined function, can work with deeper arrays
    array_walk_recursive($array,"printArray");

