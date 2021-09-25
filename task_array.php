 <?php
//    $array = array_fill(0, 10, rand(1, 100)); //fills with the same number
    $array = array();
    for($i = 0; $i < 10; $i++) {
        $array[$i] = rand(1,100);
    }

    function deleteDuplicateValues($array)
    {
        $array1 = array_unique($array); //delete
        return array_values($array1); //re-index
    }

    function sortArray($array)
    {
        $array2 = deleteDuplicateValues($array);
        rsort($array2);
        return $array2;
    }

    function displayTable($array)
    {
        echo "<table border='2' width='25%' height='25%'>";
        foreach ($array as $key => $value) {
            echo "<tr>";
            echo "<td align='center'>$key</td>";
            echo "<td align='center'>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

     print_r($array);
     echo "<br>";
     print_r(deleteDuplicateValues($array));
     echo "<br>";
     $array3 = sortArray($array);
     displayTable($array3);
