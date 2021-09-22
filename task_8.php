<?php
    $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

    function get_loop($array) {
        foreach($array as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value . "<br>";
        }
    }

    asort($array);
    echo "a) ascending order sort by value: <br>";
    echo get_loop($array);

    ksort($array);
    echo "b) ascending order sort by Key: <br>" ;
    echo get_loop($array);

    arsort($array);
    echo "c) descending order sorting by Value: <br>";
    echo get_loop($array);

    krsort($array);
    echo "d) descending order sorting by Key: <br>";
    echo get_loop($array);
