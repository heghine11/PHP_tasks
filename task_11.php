<?php
    $array1 = array(array(77, 87), array(23, 45));
    $array2 = array("w3resource", "com");
//    print_r(array_merge_recursive($array1, $array2)); //would work if arrays had string keys
    function mergeArrays($arr1, $arr2)
    {
        $result = array(); //empty array
        $result[] = $arr1; //as associative array
        foreach ($arr2 as $key => $val) {
            $result[] = $val;
        }
        return $result;
    }

    print_r(array_map('mergeArrays',$array2, $array1)); //array_map() returns array