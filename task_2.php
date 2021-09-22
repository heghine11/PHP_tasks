<?php
$color = ['white', 'green', 'red'];

    for ($i = 0; $i < count($color); $i++) {
        echo $color[$i] . ",";
    }

    foreach ($color as $value) {
        echo "<li> $value </li>";
    }