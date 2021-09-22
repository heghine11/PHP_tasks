<?php
    $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75,
        76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    ];

    function get_average($temp)
    {
        $sum = 0;
        foreach ($temp as $x) {
            global $sum;
            $sum += $x;
        }
        $average = $sum / count($temp);
        echo "Average Temperature is : " . $average . "<br>";
    }

    function get_lowest_temps($temp)
    {
        sort($temp);
        echo "List of seven lowest temperatures : ";

        for ($x = 0; $x < 7; $x++) {
            echo $temp[$x] . ", ";
        }
    }

    function get_highest_temps($temp)
    {
        sort($temp);
        echo "<br> List of seven highest temperatures : ";

        for ($x = count($temp) - 7; $x < count($temp); $x++) {
            echo $temp[$x] . ",";
        }
    }

    get_average($temp);
    get_lowest_temps($temp);
    get_highest_temps($temp);